<template>
  <div>
          <vue-bootstrap-typeahead
                :data="data"
                v-model="addressSearch"
                size="lg"
                placeholder="Type an address..."
                @hit="selectedAddress = $event"
          />

          <!-- <vue-bootstrap-typeahead
                :data="addresses"
                v-model="addressSearch"
                size="lg"
                :serializer="s => s.text"
                placeholder="Type an address..."
                @hit="selectedAddress = $event"
          /> -->
  </div>
</template>

<script>
    import _ from 'underscore'
    import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'

    // const API_URL = 'https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/suggest?f=json&maxSuggestions=5&text=:query'
    const API_URL = '/get-list/postcode?search=:query'
    export default {
        components: {
            VueBootstrapTypeahead
        },
    data() {
        return {
            addressSearch: '',
            addresses: [],
            selectedAddress: {},
            data: ''
        }
    },
    methods: {
        async getAddresses(query) {
        const res = await fetch(API_URL.replace(':query', query))
        const suggestions = await res.json()
        this.data = suggestions.map( function (postcode) { return postcode.location } )
 
        }
    },
    watch: {
        addressSearch: _.debounce(function(addr) { this.getAddresses(addr) }, 300)
    }
}
</script>

<style scoped>
  .row {
    padding-top: 1rem;
  }

  .big {
    height: 500px;
  }
</style>
