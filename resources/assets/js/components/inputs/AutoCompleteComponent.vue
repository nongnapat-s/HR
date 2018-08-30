<template>
    <div class="form-group col-xs-12">
        <label 
            v-text = "label" 
        ></label>
            
        <input
            type="text"
            :name = "name"
            class="form-control"
            :value = "value"
            
            ref="input">
            <!-- @input="$emit('input', $refs.input.value)" -->
    </div>
</template>
<script>

export default {
    props : ['name', 'label', 'value'],
    mounted(){
        var search = new autoComplete({
                    selector: 'input[name="' + this.name + '"]',
                    minChars: 1,
                    source: function(term, suggest){
                        term = term.toLowerCase();
                        var choices = ['ActionScript', 'AppleScript', 'Asp', 'PHP'];
                        var matches = [];
                        console.log(this.selector.val());
                        for (var i=0; i<choices.length; i++) 
                            if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                        suggest(matches);
                    }
                });
        console.log('input[name="' + this.name + '"]')
    }
 
}
</script>
