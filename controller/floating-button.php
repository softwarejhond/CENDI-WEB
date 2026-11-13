<!-- Floating Button -->
<div class="floating-button">

    <button class="btn btn-float btn-brand" style=" color: white; border: none;" type="button" id="floatingButton">
        <i class='bx bx-plus'></i>
    </button>
    
    <div class="floating-menu" id="floatingMenu">
        <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank">
            <i class='bx bxs-book'></i> Q10 Técnicos
        <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank">
            <i class='bx bxs-book'></i> Q10 Bachillerato
        </a>
        <a href="https://www.campusdigital.cendiacademico.edu.co/login/index.php" target="_blank">
            <i class='bx bxs-rocket'></i> Campus virtual
        </a>
        <a href="https://escolink.cendiacademico.edu.co/login.php" target="_blank" style="display: flex; align-items: center; padding: 12px 24px; color: white; text-decoration: none;">
    <img src="img/icons/escolink.png" alt="Escolink" style="width: 20px; height: 20px; object-fit: contain; margin-right: 10px;">
    <span>Escolink</span>
</a>          
    </div>
</div>

<script>
document.getElementById('floatingButton').addEventListener('click', function() {
    document.getElementById('floatingMenu').classList.toggle('show');
});

// Cerrar el menú si se hace clic fuera de él
document.addEventListener('click', function(event) {
    const menu = document.getElementById('floatingMenu');
    const button = document.getElementById('floatingButton');
    
    if (!menu.contains(event.target) && !button.contains(event.target)) {
        menu.classList.remove('show');
    }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const waButton = document.createElement("a");
    waButton.href = "https://wa.me/573122143744?text=Hola,%20quisiera%20más%20información";
    waButton.target = "_blank";
    waButton.className = "btn-whatsapp-script";
    waButton.innerHTML = "<i class='bx bxl-whatsapp'></i>";
    
    // Aplicar estilos dinámicamente
    Object.assign(waButton.style, {
        position: "fixed",
        right: "20px",
        bottom: "180px",
        width: "55px",
        height: "55px",
        backgroundColor: "#25D366",
        color: "#FFF",
        borderRadius: "50%",
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        fontSize: "32px",
        boxShadow: "2px 4px 10px rgba(0,0,0,0.3)",
        zIndex: "9999",
        textDecoration: "none"
    });

    document.body.appendChild(waButton);
});
</script>