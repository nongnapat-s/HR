<template>
  <div>
        <div class="form-group col-xs-10">
            <label 
                v-text = "label" 
            ></label>
          <vue-bootstrap-typeahead
                :name = "name"
                :url = "url"
                :data="dataApi"
                v-model="addressSearch"
                placeholder=""
                :value = "value"
                @hit="selectedAddress = $event"
                @change="$emit('input', $refs.input.value)"
                ref = "input"
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
  </div>
</template>

<script>
    import _ from 'underscore'
    // import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'
    import VueBootstrapTypeahead from './VueBootstrapTypeahead.vue'
 
    export default {
        props : {
            label : { default : ''},
            name : { default : ''},
            url : { default : ''},
            data : { default : ''},
            value : { default : ''}
        },
        components: {
            VueBootstrapTypeahead
        },
    data() {
        return {
            addressSearch: '',
            addresses: [],
            selectedAddress: {},
            dataApi : [],
        }
    },
    methods: {
        // async getAddresses(query) {
        // const res = await fetch(this.url.replace(':query', query))
        // const suggestions = await res.json()
        // this.dataApi = suggestions.map( function (postcode) { return postcode.location } )
        getAddresses(query) {
            axios.get(this.url.replace(':query', query))
            .then((response) => {
                console.log (response)
                this.dataApi = response.data.map( function (postcode) { return postcode.location } )
            })
  
      
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
