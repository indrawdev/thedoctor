<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-hospital-user fa-lg"></i>
                        Patient
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
                    <form id="patient">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input v-model="name" class="form-control" type="text" placeholder="Name">
                                </div>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input v-model="dob" class="form-control" type="text" placeholder="Date of Birth">
                                </div>
                                <div class="input-group mb-3">
                                    <input v-model="weight" class="form-control text-right" type="number" placeholder="Weight">
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select">
                                        <option>O</option>
                                        <option>AB</option>
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <select class="custom-select">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <input v-model="height" class="form-control text-right" type="number" placeholder="Height">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button @click="cleared" type="button" class="btn btn-default">Cancel</button>
                    <button @click="created" type="button" class="btn btn-success float-right">Save</button>
                </div>
            </div>
        </div>
    </div>
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
            confirm() {

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