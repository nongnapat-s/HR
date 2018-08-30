<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" name = "q" />
</body>
<script>
    
    var hello = new autoComplete({
        selector: 'input[name="q"]',
        minChars: 2,
        source: function(term, suggest){
                term = term.toLowerCase();
                var choices = ['ActionScript', 'AppleScript', 'Asp', 'PHP'];
                var matches = [];
                for (var i=0; i<choices.length; i++)
                    if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                suggest(matches);
        }
    });
</script>
</html>