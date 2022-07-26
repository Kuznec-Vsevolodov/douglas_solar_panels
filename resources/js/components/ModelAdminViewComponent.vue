<template>
    <div class="container">
        <div class="row col-12">
            <DataTable :value="models" :resizableColumns="true" columnResizeMode="expand">
                <template #header>
                </template>
                <Column field="user_name" header="User name" :sortable="true"></Column>
                <Column field="name" header="Model name" :sortable="true"></Column>
                <Column field="last_edited" header="Last edited" :sortable="true"></Column>
                <Column field="modellax_code" header="Modellax code" :sortable="true"></Column>

                <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                    <template #body="slotProps">
                        <Button type="button" icon="pi pi-cog"></Button>
                    </template>
                </Column>

                <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                    <template #body="slotProps">
                        <Button type="button" icon="pi pi-times" class="p-button-danger"></Button>
                    </template>
                </Column>

                <template #footer>
                    In total there are {{ models ? models.length : 0 }} models.
                </template>
            </DataTable>
        </div>
    </div>
</template>

<script>

import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Row from 'primevue/row';
import Button from 'primevue/button'

export default {
    components: {
        DataTable,
        Column,
        Row,
        Button
    },
    data() {
        return {
            models: []
        }
    },
    mounted() {
        console.log('Component mounted.');
        this.getModels();
    },
    methods: {
        getModels() {
            axios.get('/get-admin-models/') // returns a promise
                .then(response => {
                    this.models = response.data.models;
                })
        }
    }
}
</script>
