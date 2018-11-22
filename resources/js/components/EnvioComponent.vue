<template>
 <section>
     <h2 class="h2">¿Qué envío preferís?</h2>
     <div class="list-group my-4">
         <router-link :to="{ name: 'Pago' }" class="list-group-item list-group-item-action flex-column align-items-start">
             <div class="d-flex w-100 justify-content-between">
                 <h6 class="mb-2 h6">Rapido a Domicilio</h6>
             </div>
             <p class="mb-2">Llega el martes</p>
         </router-link>
         <router-link :to="{ name: 'Pago' }" class="list-group-item list-group-item-action flex-column align-items-start">
             <div class="d-flex w-100 justify-content-between">
                 <h6 class="mb-2 h6">Retiro en Domicilio del Vendedor</h6>
                 <h6 class="mb-2 h6 justify-content-end">Gratis</h6>
             </div>

             <p class="mb-2">En Lomas de Zamora</p>
         </router-link>
     </div>
 </section>
</template>

<script>
    export default {
        data(){
            return{

            }
        },

    }
</script>
