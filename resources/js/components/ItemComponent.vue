<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-boxes fa-lg"></i>
                        Item
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
                    <form id="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input v-model="form.name" class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <select class="custom-select">
                                        <option>Unit</option>
                                        <option value="1">Kotak</option>
                                        <option value="2">Dus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input v-model="form.price" class="form-control text-right" type="text" placeholder="Price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option>---</option>
                                        <option value="1">Kalbe Farma</option>
                                        <option value="2">Kimia Farma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input v-model="form.stock" class="form-control text-right" type="number" placeholder="Stock">
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
            console.log('Component items.');
        },
        data() {
            return {
                form: {
                    name: '',
                    unit: [],
                    price: '',
                    supplier: [],
                    stock: ''
                }
            }
        },
        methods: {
            loaded() {

            },
            confirm() {

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