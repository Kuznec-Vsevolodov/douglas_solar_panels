<template>
    <div class="row col-12">

        <DataTable :value="models" :resizableColumns="true" columnResizeMode="expand">
            <template #header>
                <h2>Models</h2>
            </template>
            <Column field="name" header="Name" :sortable="true"></Column>
            <Column field="revenue" header="revenue" :sortable="true"></Column>
            <Column field="ebitda" header="EBITDA" :sortable="true"></Column>
            <Column field="capex" header="Capex" :sortable="true"></Column>
            <Column field="irr_before_tax" header="IRR before tax" :sortable="true"></Column>
            <Column field="irr_after_tax" header="IRR after tax" :sortable="true"></Column>

            <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                <template #body="slotProps">
                    <Button type="button" icon="pi pi-times" class="p-button-danger"></Button>
                </template>
            </Column>

            <Column headerStyle="width: 8em" bodyStyle="text-align: center">
                <template #body="slotProps">
                    <Button type="button" icon="pi pi-cog"></Button>
                </template>
            </Column>

            <template #footer>
                In total there are {{ models ? models.length : 0 }} models.
            </template>
        </DataTable>
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
            axios.get('/get-models-list/') // returns a promise
                .then(response => {
                    this.models = response.data.models;
                })
        }
    }
}
</script>
