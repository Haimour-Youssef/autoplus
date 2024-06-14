var Mesures = function () {
    //function to initiate bootstrap extended modals
    var initMesures = function () {
    	



        $('#nbr_essaie').on('change',function(){

            $('.panel-body input').val('');

            essaie = $('#nbr_essaie').val();
            $('.div-input-valeurs > div').addClass('no-display');

            for(i=1;i<=essaie;i++)
            {
                $('#input_essaie_' + i).val('');
                $('#lmoyen').val('0');
                $('#input_essaie_' + i).parent().parent().removeClass('no-display');
            }

        });



        function calclulerMoyen()
        {


            $total = 0;
            $('.part2').val('');
            for(i=1;i<=$('#nbr_essaie').val();i++)
            {
                $total = parseInt($total + parseInt($('#input_essaie_' + i).val()));

            }



            $lmoyen = Math.trunc((($total/$('#nbr_essaie').val()) * 3.14) * 2);
            if($('#Type-LD').prop('checked')) 
                $lmoyen = Math.trunc(($total/$('#nbr_essaie').val()));




            $('#lmoyen').val($lmoyen);
            $('#implusion').val(Math.trunc(1000*1000000/$('#lmoyen').val()));

            $('#input_fc').val('0.5');

        }



        $('.input_essaie').bind( "keyup keydown",function(){calclulerMoyen();});
        $('.gender').on( "change",function(){calclulerMoyen();});


        $('#input_wv').bind( "keyup keydown",function(){calculerEmt();});
        $('#input_fc').bind( "keyup keydown",function(){calculerEmt();});
        $('#input_k').bind( "keyup keydown",function(){calculerEmt();});




        function calculerEmt()
        {

            implusion = parseInt($('#implusion').val());
            wv = parseInt($('#input_wv').val());
            fc = ($('#input_fc').val() / 100) + 1;
            k = parseInt($('#input_k').val());
            wc = (wv * fc).toFixed(0);

            D1000 = parseInt((wc * 1000) / k);
            Erreur = (((D1000-1000)/1000)*100).toFixed(2);



            $('#input_wc').val(wc);
            $('#input_emt').val(Erreur);
            $('#input_d1000').val(D1000);
        }




    };
    return {
    	init: function () {
    		initMesures();
    	}
    };
}();