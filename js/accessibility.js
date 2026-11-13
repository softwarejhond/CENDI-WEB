// Clase principal para gestionar la accesibilidad
class AccessibilityTools {
    constructor() {
        this.initializeElements();
        this.addEventListeners();
        this.loadPreferences();
    }

    initializeElements() {
        this.toolbar = document.getElementById('accessibility-toolbar');
        this.toggle = document.querySelector('.accessibility-toggle');
        this.menu = document.querySelector('.accessibility-menu');
        this.fontSize = parseInt(window.getComputedStyle(document.body).fontSize);
    }

    addEventListeners() {
        // Toggle menú
        this.toggle.addEventListener('click', () => {
            this.menu.classList.toggle('show');
        });

        // Tamaño de texto
        document.getElementById('increaseFontSize').addEventListener('click', () => this.changeFontSize(2));
        document.getElementById('decreaseFontSize').addEventListener('click', () => this.changeFontSize(-2));

        // Alto contraste
        document.getElementById('toggleContrast').addEventListener('click', () => this.toggleHighContrast());

        // Fuente para dislexia
        document.getElementById('toggleDyslexicFont').addEventListener('click', () => this.toggleDyslexicFont());

        // Resaltar enlaces
        document.getElementById('toggleLinks').addEventListener('click', () => this.toggleLinkHighlight());

        // Lector de pantalla
        document.getElementById('readPage').addEventListener('click', () => this.readPage());

            // Leer elemento seleccionado
            document.getElementById('readSelected').addEventListener('click', () => this.activateReadSelectedMode());

        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!this.toolbar.contains(e.target)) {
                this.menu.classList.remove('show');
            }
        });
    }
    activateReadSelectedMode() {
        // Mostrar mensaje visual
        alert('Haz clic en cualquier elemento de la página para escucharlo. Pulsa ESC para cancelar.');
        this.readSelectedActive = true;
        document.body.style.cursor = 'pointer';
        // Agregar listener temporal
        this._readSelectedHandler = (e) => {
            if (!e.target.closest('.accessibility-toolbar')) {
                e.preventDefault();
                e.stopPropagation();
                this.readElement(e.target);
                this.deactivateReadSelectedMode();
            }
        };
        document.addEventListener('click', this._readSelectedHandler, true);
        // Permitir cancelar con ESC
        this._escHandler = (e) => {
            if (e.key === 'Escape') {
                this.deactivateReadSelectedMode();
            }
        };
        document.addEventListener('keydown', this._escHandler);
    }

    deactivateReadSelectedMode() {
        this.readSelectedActive = false;
        document.body.style.cursor = '';
        document.removeEventListener('click', this._readSelectedHandler, true);
        document.removeEventListener('keydown', this._escHandler);
    }

    readElement(element) {
        window.speechSynthesis.cancel();
        let text = element.innerText || element.textContent || '';
        text = text.replace(/\s+/g, ' ').trim();
        if (!text) {
            alert('No se encontró texto en el elemento seleccionado.');
            return;
        }
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'es-ES';
        utterance.rate = 1.0;
        utterance.pitch = 1.0;
        window.speechSynthesis.speak(utterance);
    }

    changeFontSize(delta) {
        this.fontSize = Math.min(Math.max(this.fontSize + delta, 12), 24);
        document.body.style.fontSize = `${this.fontSize}px`;
        this.savePreferences();
    }

    toggleHighContrast() {
        // Aplicar alto contraste a todo excepto al toolbar
        const toolbar = document.getElementById('accessibility-toolbar');
        
        // Si vamos a activar el alto contraste
        if (!document.body.classList.contains('high-contrast')) {
            // Excluir el toolbar antes de aplicar el filtro
            toolbar.style.isolation = 'isolate';
        } else {
            // Restaurar el toolbar cuando se desactiva
            toolbar.style.isolation = '';
        }
        
        document.body.classList.toggle('high-contrast');
        this.savePreferences();
    }

    toggleDyslexicFont() {
        document.body.classList.toggle('dyslexic-font');
        this.savePreferences();
    }

    toggleLinkHighlight() {
        document.body.classList.toggle('highlight-links');
        this.savePreferences();
    }

    readPage() {
        const readButton = document.getElementById('readPage');
        const stopButton = document.getElementById('stopReading');
        
        // Cancelar cualquier lectura anterior
        window.speechSynthesis.cancel();
        
        // Obtener el texto principal evitando menús y elementos de navegación
        const mainContent = document.querySelector('main') || document.body;
        const text = this.getReadableText(mainContent);
        
        // Configurar el utterance
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'es-ES';
        utterance.rate = 1.0;
        utterance.pitch = 1.0;
        
        // Mostrar/ocultar botones
        readButton.style.display = 'none';
        stopButton.style.display = 'flex';
        
        // Manejar el fin de la lectura
        utterance.onend = () => {
            this.stopReading();
        };
        
        // Comenzar lectura
        window.speechSynthesis.speak(utterance);
        
        // Agregar evento al botón de detener
        stopButton.onclick = () => this.stopReading();
    }
    
    stopReading() {
        const readButton = document.getElementById('readPage');
        const stopButton = document.getElementById('stopReading');
        
        // Detener la lectura
        window.speechSynthesis.cancel();
        
        // Restaurar botones
        readButton.style.display = 'flex';
        stopButton.style.display = 'none';
    }
    
    getReadableText(element) {
        // Filtrar elementos que no queremos leer
        const excludeSelectors = [
            'nav',
            'header',
            'footer',
            '.accessibility-toolbar',
            'script',
            'style',
            'noscript',
            '[aria-hidden="true"]'
        ];
        
        const clone = element.cloneNode(true);
        
        // Remover elementos excluidos
        excludeSelectors.forEach(selector => {
            clone.querySelectorAll(selector).forEach(el => el.remove());
        });
        
        // Limpiar el texto
        return clone.textContent
            .replace(/\s+/g, ' ')
            .trim();
    }

    savePreferences() {
        const preferences = {
            fontSize: this.fontSize,
            highContrast: document.body.classList.contains('high-contrast'),
            dyslexicFont: document.body.classList.contains('dyslexic-font'),
            highlightLinks: document.body.classList.contains('highlight-links')
        };
        localStorage.setItem('accessibilityPreferences', JSON.stringify(preferences));
    }

    loadPreferences() {
        const saved = localStorage.getItem('accessibilityPreferences');
        if (saved) {
            const preferences = JSON.parse(saved);
            if (preferences.fontSize) {
                this.fontSize = preferences.fontSize;
                document.body.style.fontSize = `${this.fontSize}px`;
            }
            if (preferences.highContrast) document.body.classList.add('high-contrast');
            if (preferences.dyslexicFont) document.body.classList.add('dyslexic-font');
            if (preferences.highlightLinks) document.body.classList.add('highlight-links');
        }
    }
}

// Inicializar las herramientas de accesibilidad cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    new AccessibilityTools();
});