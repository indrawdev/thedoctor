<template>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component prescription.')
        },
        data() {
            return {
                form: {
                    name: '',
                    phone: ''
                }
            }
        },
        methods: {
            loaded() {

            },
            created() {
                axios.post('/master/officer', {
                    name: this.form.name,
                    phone: this.form.phone
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
                this.form.phone = '';
            }
        }
    }
</script>