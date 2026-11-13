<template id="my-template">
  <swal-title>
    ¿Quieres aprovechar nuestra promoción?
  </swal-title>
  <swal-icon type="info" color="#f08006"></swal-icon>
  <swal-button type="confirm">
    Sí, quiero informarme
  </swal-button>
  <swal-button type="cancel">
    Más tarde
  </swal-button>
  <swal-button type="deny">
    No, gracias
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param name="customClass" value='{"popup":"promo-popup"}' />
  <swal-function-param name="didOpen" value="popup => console.log('promo template opened', popup)" />
</template>
