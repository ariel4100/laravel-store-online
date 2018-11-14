<template>
    <section class="container my-5 py-5">
        <div class="jumbotron">
            <h2 class="h1-responsive font-weight-bold wow bounceInRight"><u>¡Carrito de Compras!</u></h2>
            <table class="table wow fadeIn">
                <thead class="table-dark">
                <tr>
                    <th>codigo</th>
                    <th>imagen</th>
                    <th>producto</th>
                    <th>variantes</th>
                    <th>eliminar fila</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
