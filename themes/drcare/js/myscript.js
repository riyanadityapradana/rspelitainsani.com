$(document).ready(function() {
    var combination = '';
    var requiredCombination = 'vd';
    
    $(document).on('keypress', function(e) {
        combination += e.key;
        console.log('tes');
        
        if (combination.length > requiredCombination.length) {
            combination = combination.slice(-requiredCombination.length);
        }

        if (combination === requiredCombination) {
            if($("#ftco-nav").find("#klaim").length<1){
                $('#ftco-nav ul').append('<li class="nav-item"><a href="/site/klaim" class="nav-link" id="klaim">Klaim</a></li>'); 
                combination = ''; // Reset the combination after it is matched
            }
        }
    });
});