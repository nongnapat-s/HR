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
                @hit = "$emit('input',items[0].value)"
                @input="oninput"
                ref = "input"
          />
                <!-- @hit="selectedItem = $event" -->
                <!-- @change="$emit('input', $refs.input.value)" -->
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
            value : { required : true },
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
                    console.log(response)
                    this.items = response.data
                    this.dataApi = this.items.map( (postcode) => { return postcode.label } )
                })
            }
        }
    },
    methods: {
        oninput(payload) {
            // this.$emit('input', payload)
        },
        // onhit(data){
        //     this.$emit('input',this.items[0].value)
        // }
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
