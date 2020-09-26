<template>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component treatment.')
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