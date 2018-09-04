<template>
  <div>
          <vue-bootstrap-typeahead
                :data="addresses"
                v-model="addressSearch"
                size="lg"
                :serializer="s => s.text"
                placeholder="Type an address..."
                @hit="selectedAddress = $event"
          />
  </div>
</template>

<script>
    import _ from 'underscore'
    import VueBootstrapTypeahead from '../inputs/VueBootstrapTypeahead'

    // const API_URL = 'https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/suggest?f=json&maxSuggestions=5&text=:query'
    const API_URL = '/get-list/postcode?search=:query '
    export default {
        components: {
            VueBootstrapTypeahead
        },
    data() {
        return {
            addressSearch: '',
            addresses: [],
            selectedAddress: {}
        }
    },
    methods: {
        async getAddresses(query) {
        const res = await fetch(API_URL.replace(':query', query))
        const suggestions = await res.json()
        this.addresses = suggestions.suggestions
        }
    },
    watch: {
        addressSearch: _.debounce(function(addr) { this.getAddresses(addr) }, 500)
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
