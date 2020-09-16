<template>

</template>

<script>
    export default {
        mounted() {
            console.log('Component patient.')
        },
        data() {
            return {
                form: {
                    name: '',
                    dob: '',
                    gender: '',
                    height: '',
                    weight: '',
                    blood: [],
                    address: ''
                }
            }
        },
        methods: {
            loaded() {

            },
            created() {

            },
            updated() {

            },
            deleted() {
                
            },
            cleared() {
                this.form.name = '';
                this.form.dob = '';
                this.form.gender = '';
                this.form.height = '';
                this.form.weight = '';
                this.form.blood = '';
                this.form.address = '';
            }
        }
    }
</script>