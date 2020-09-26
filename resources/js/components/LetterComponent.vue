<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">
                        <i class="fas fa-envelope-open-text fa-lg"></i>
                        Letter
                        <button type="button" class="btn btn-xs btn-outline-success" data-toggle="popover">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                        </button>
                    </h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#sick" data-toggle="tab">Sick</a></li>
                        <li class="nav-item"><a class="nav-link" href="#health" data-toggle="tab">Health</a></li>
                        <li class="nav-item"><a class="nav-link" href="#referral" data-toggle="tab">Referral</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pregnant" data-toggle="tab">Pregnant</a></li>
                    </ul>
                    <div class="card-tools p-3">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="sick">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="health">

                        </div>
                        <div class="tab-pane" id="referral">

                        </div>
                        <div class="tab-pane" id="pregnant">
                            
                        </div>
                    </div>
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
            console.log('Component letter.')
        },
        data() {
            return {
                form: {
                    registration: ''
                }
            }
        },
        methods: {
            loaded() {

            },
            confirm() {

            },
            createdSick() {

            },
            creartedPregnant() {

            },
            updated() {

            },
            deleted() {
                
            },
            cleared() {

            }
        }
    }
</script>