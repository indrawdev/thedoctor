<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-user-md fa-lg"></i>
                        <button type="button" class="btn btn-xs btn-outline-success" data-toggle="popover">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                        </button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input v-model="form.name" class="form-control" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input v-model="form.phone" class="form-control" type="text" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button @click="created" type="button" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default float-right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component doctor.')
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
                axios.post('/master/doctor', {
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