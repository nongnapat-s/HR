<template>
  <div>
        <div class="form-group col-xs-10">
            <label
                v-text = "label"
            ></label>
        <!-- minMatchingChars="5" -->
          <vue-bootstrap-typeahead
                :name = "name"
                :url = "url"
                :data="dataApi"
                v-model="itemSearch"
                placeholder=""
                :value = "value"
                @hit="selectedItem = $event"
                @change="$emit('input', $refs.input.value)"
                @input="oninput"
                ref = "input"
          />
          </div>
  </div>
</template>

<script>
    import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'

    export default {
        props : {
            label : { default : ''},
            name : { default : ''},
            url : { default : ''},
            data : { default : ''},
            value : { default : ''},
            minChars: { default : 2}
        },
        components: {
            VueBootstrapTypeahead
        },
    data() {
        return {
            itemSearch: '',
            items: [],
            selectedItem: {},
            dataApi : [],
        }
    },
    watch: {
        itemSearch(itemSearch) {
            if ( itemSearch.length >= this.minChars) {
                axios.get(this.url.replace(':query', itemSearch))
                .then((response) => {
                    this.dataApi = response.data.map( (postcode) => { return postcode.location } )
                })
            }
        }
    },
    methods: {
        oninput(payload) {
            this.$emit('input', payload)
        }
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
