<template>

</template>

<script>
    export default {
        mounted() {
            console.log('Component items.');
        },
        data() {
            return {
                form: {
                    name: '',
                    unit: '',
                    price: '',
                    supplier: [],
                    stock: ''
                }
            }
        },
        methods: {
            loaded() {

            },
            created() {
                axios.post('/master/officer', {
                    name: this.form.name,
                    unit: this.form.unit,
                    price: this.form.price,
                    supplier: this.form.supplier,
                    stock: this.form.stock
                })
                .then(response => {
                    console.log(response);
                    this.cleared();
                });
            },
            updated() {

            },
            deleted() {

            },
            cleared() {
                this.form.name = '';
                this.form.unit = '';
                this.form.price = '';
                this.form.supplier = '';
                this.form.stock = '';
            }
        }
    }
</script>