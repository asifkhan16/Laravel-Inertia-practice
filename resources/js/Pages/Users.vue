<script setup>
    import Layout from '../Layout/Layout.vue'
    import Pagination from '../Components/Pagination.vue'
    import { watch ,ref } from 'vue';
    import { Inertia } from '@inertiajs/inertia';

    const props = defineProps({
        users : Object,
        filters : Object
    })
    const search = ref(props.filters.search)
    // search = props.filters.search;
    watch(search,value=>{
        Inertia.get('/users',{ search : value},{
            preserveState: true,
            replace : true
        })
    })
</script>
<template>
    <Layout>
        <div class="d-flex justify-content-between mt-3">
            <div>

                <h1>Users</h1>
            </div>
            <div>

                <input type="text" v-model="search" class="p-1" placeholder="Search...">
            </div>
        </div>
        <table class="table mx-5">
            <thead>
              <tr>
                  <th scope="col">S#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
              <tr v-for="user,index in users.data" :key="user.id">
                <th scope="row">{{ index+1 }}</th>
                <td>{{ user.name }}</td>
                <td>Edit</td>
              </tr>
            </tbody>
        </table>
        <Pagination :links="users.links"/>
          
    </Layout>
</template>