    $(document).ready(function(){
        var des = true;
        $("#areaChat").show();

        $("#chat").click(function(){
                if(des==true) {
                    /* Si Aggiungono delle classi agli identifcatori selezionati*/
                    $("#areaChat").addClass("go");
                    $("#chat").addClass("go");
                    /* Si cancellano le classi agli identifcatori selezionati*/
                    $("#areaChat").removeClass("return");
                    $("#chat").removeClass("return");
                }

                if(des==false) {
                    $("#areaChat").addClass("return");
                    $("#chat").addClass("return");

                    $("#areaChat").removeClass("go");
                    $("#chat").removeClass("go");
                }

                if(des==true){des = false;}
                else{des = true;}
        });

    });
