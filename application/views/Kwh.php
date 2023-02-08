<html>

<head>
    <title>Multi Step Registration</title>
    <style>
    body {
        font-family: tahoma;
        font-size: 12px;
    }

    #signup-step {
        margin: auto;
        padding: 0;
        width: 39%
    }

    #signup-step li {
        list-style: none;
        float: left;
        padding: 5px 10px;
        border-top: #004C9C 1px solid;
        border-left: #004C9C 1px solid;
        border-right: #004C9C 1px solid;
        border-radius: 5px 5px 0 0;
    }

    .active {
        color: #FFF;
    }

    #signup-step li.active {
        background-color: #004C9C;
    }

    #signup-form {
        clear: both;
        border: 1px #004C9C solid;
        padding: 20px;
        width: 36%;
        margin: auto;
    }

    .demoInputBox {
        padding: 10px;
        border: #CDCDCD 1px solid;
        border-radius: 4px;
        background-color: #FFF;
        width: 50%;
    }

    .signup-error {
        color: #FF0000;
        padding-left: 15px;
    }

    .message {
        color: #00FF00;
        font-weight: bold;
        width: 100%;
        padding: 10;
    }

    .btnAction {
        padding: 5px 10px;
        background-color: #004C9C;
        border: 0;
        color: #fff;
        cursor: pointer;
        margin-top: 15px;
    }

    label {
        line-height: 35px;
    }
    </style>

    <!--<script src="http://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    function validate() {
        var output = true;
        $(".signup-error").html('');

        if ($("#personal-field").css('display') != 'none') {
            if (!($("#namepop").val())) {
                output = false;
                $("#namepop-error").html("namepop required!");
            }

            if (!($("#dayalistrik").val())) {
                output = false;
                $("#dayalistrik-error").html("Daya Listrik required!");
            }

            if (!($("#cos").val())) {
                output = false;
                $("#cos-error").html("COS required!");
            }

            if (!($("#arester").val())) {
                output = false;
                $("#arester-error").html("Arester required!");
            }

            if (!($("#idpelanggan").val())) {
                output = false;
                $("#idpelanggan-error").html("ID Pelanggan required!");
            }

            if (!($("#phasa").val())) {
                output = false;
                $("#phasa-error").html("Phasa required!");
            }
            if (!($("#tipecos").val())) {
                output = false;
                $("#tipecos-error").html("Tipe COS required!");
            }
            if (!($("#tipearester").val())) {
                output = false;
                $("#tipearester-error").html("Tipe Arester required!");
            }
        }

        if ($("#pengukurantegangan-field").css('display') != 'none') {
            if (!($("#rn").val())) {
                output = false;
                $("#rn-error").html("R-N required!");
            }

            if (!($("#tn").val())) {
                output = false;
                $("#tn-error").html("T-N required!");
            }

            if (!($("#rt").val())) {
                output = false;
                $("#rt-error").html("R-T required!");
            }

            if (!($("#ng").val())) {
                output = false;
                $("#ng-error").html("N-G required!");
            }

            if (!($("#sn").val())) {
                output = false;
                $("#sn-error").html("S-N required!");
            }

            if (!($("#rs").val())) {
                output = false;
                $("#rs-error").html("R-S required!");
            }
            if (!($("#st").val())) {
                output = false;
                $("#st-error").html("S-T required!");
            }

        }

        if ($("#bebanamper-field").css('display') != 'none') {
            if (!($("#r").val())) {
                output = false;
                $("#r-error").html("R required!");
            }

            if (!($("#s").val())) {
                output = false;
                $("#s-error").html("S required!");
            }

            if (!($("#t").val())) {
                output = false;
                $("#t-error").html("T required!");
            }



        }

        if ($("#kapasitasmcb-field").css('display') != 'none') {
            if (!($("#rmcb").val())) {
                output = false;
                $("#rmcb-error").html("R required!");
            }

            if (!($("#smcb").val())) {
                output = false;
                $("#smcb-error").html("S required!");
            }

            if (!($("#tmcb").val())) {
                output = false;
                $("#tmcb-error").html("T required!");
            }

        }

        if ($("#warnakabel-field").css('display') != 'none') {
            if (!($("#rwarna").val())) {
                output = false;
                $("#rwarna-error").html("R Warna required!");
            }

            if (!($("#nwarna").val())) {
                output = false;
                $("#nwarna-error").html("N Warna required!");
            }

            if (!($("#swarna").val())) {
                output = false;
                $("#swarna-error").html("S Warna required!");
            }

            if (!($("#gwarna").val())) {
                output = false;
                $("#gwarna-error").html("G Warna required!");
            }

            if (!($("#twarna").val())) {
                output = false;
                $("#twarna-error").html("T Warna required!");
            }

        }

        if ($("#luaspenampang-field").css('display') != 'none') {
            if (!($("#rmm").val())) {
                output = false;
                $("#rmm-error").html("R mm required!");
            }

            if (!($("#nmm").val())) {
                output = false;
                $("#nmm-error").html("N mm required!");
            }

            if (!($("#smm").val())) {
                output = false;
                $("#smm-error").html("S mm required!");
            }

            if (!($("#gmm").val())) {
                output = false;
                $("#gmm-error").html("G mm required!");
            }

            if (!($("#tmm").val())) {
                output = false;
                $("#tmm-error").html("T mm required!");
            }

        }

        if ($("#temuanrekomendasi-field").css('display') != 'none') {
            if (!($("#temuan").val())) {
                output = false;
                $("#temuan-error").html("Temuan required!");
            }

            if (!($("#rekomendasi").val())) {
                output = false;
                $("#rekomendasi-error").html("Rekomendasi required!");
            }



        }

        return output;
    }

    $(document).ready(function() {
        $("#next").click(function() {
            var output = validate();
            if (output === true) {
                var current = $(".active");
                var next = $(".active").next("li");
                if (next.length > 0) {
                    $("#" + current.attr("id") + "-field").hide();
                    $("#" + next.attr("id") + "-field").show();
                    $("#back").show();
                    $("#finish").hide();
                    $(".active").removeClass("active");
                    next.addClass("active");
                    if ($(".active").attr("id") == $("li").last().attr("id")) {
                        $("#next").hide();

                        $("#finish").show();
                    }
                }
            }
        });


        $("#back").click(function() {
            var current = $(".active");
            var prev = $(".active").prev("li");
            if (prev.length > 0) {
                $("#" + current.attr("id") + "-field").hide();
                $("#" + prev.attr("id") + "-field").show();
                $("#next").show();
                $("#finish").hide();
                $(".active").removeClass("active");
                prev.addClass("active");
                if ($(".active").attr("id") == $("li").first().attr("id")) {
                    $("#back").hide();
                }
            }
        });

        $("input#finish").click(function(e) {
            var output = validate();
            var current = $(".active");

            if (output === true) {
                return true;
            } else {
                //prevent refresh
                e.preventDefault();
                $("#" + current.attr("id") + "-field").show();
                $("#back").show();
                $("#finish").show();
            }
        });
    });
    </script>

</head>

<body>

    <ul id="signup-step">
        <li id="personal" class="active">KWH</li>
        <li id="pengukurantegangan">Pengukuran Tegangan (Volt)</li>
        <li id="bebanamper">Beban (Ampere)</li>
        <li id="kapasitasmcb">Kapasitas MCB</li>


        <li id="warnakabel">Warna Kabel Output KWH</li>
        <li id="luaspenampang">Luas Penampang Kabel Output KWH (mm)</li>
        <li id="temuanrekomendasi">Temuan dan Rekomendasi</li>
    </ul>

    <?php
      /*   if (isset($success)) {
            echo '<div>User record inserted successfully</div>';
        }
        else{
            echo '<div>User record inserted failed</div>';
        } */

        $attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
        echo form_open($this->uri->uri_string(), $attributes);
        ?>
    <div id="personal-field">
        <label>Nama POP</label><span id="namepop-error" class="signup-error"></span>
        <div><input type="text" name="namepop" id="namepop" value="POP_1KYB159 Icon+ MAMPANG SHELTER PLN"
                class="demoInputBox" /></div>
        <label>Daya Listrik</label><span id="dayalistrik-error" class="signup-error"></span>
        <div><input type="number" name="dayalistrik" id="dayalistrik" value=33000 class="demoInputBox" /></div>

        <label>COS</label><span id="cos-error" class="signup-error"></span>
        <div><input type="text" name="cos" id="cos" class="demoInputBox" value="ADA" /></div>


        <label>Arester</label><span id="arester-error" class="signup-error"></span>
        <div><input type="text" name="arester" id="arester" class="demoInputBox" value="ADA" /></div>

        <label>ID Pelanggan</label><span id="idpelanggan-error" class="signup-error"></span>
        <div><input type="number" name="idpelanggan" id="idpelanggan" class="demoInputBox" value="547401525175" /></div>

        <label>Phasa</label><span id="phasa-error" class="signup-error"></span>
        <div><input type="text" name="phasa" id="phasa" class="demoInputBox" value="3-Phase" /></div>

        <label>Tipe COS</label><span id="tipecos-error" class="signup-error"></span>
        <div><input type="text" name="tipecos" id="tipecos" class="demoInputBox" value="Manual" /></div>

        <label>Tipe Arester</label><span id="tipearester-error" class="signup-error"></span>
        <div><input type="text" name="tipearester" id="tipearester" class="demoInputBox" value="OBO" /></div>

    </div>

    <div id="pengukurantegangan-field" style="display:none;">
        <label>R-N</label><span id="rn-error" class="signup-error"></span>
        <div><input type="number" name="rn" id="rn" class="demoInputBox" /></div>
        <label>T-N</label><span id="tn-error" class="signup-error"></span>
        <div><input type="number" name="tn" id="tn" class="demoInputBox" /></div>
        <label>R-T</label><span id="rt-error" class="signup-error"></span>
        <div><input type="number" name="rt" id="rt" class="demoInputBox" /></div>
        <label>N-G</label><span id="ng-error" class="signup-error"></span>
        <div><input type="number" name="ng" id="ng" class="demoInputBox" /></div>
        <label>S-N</label><span id="sn-error" class="signup-error"></span>
        <div><input type="number" name="sn" id="sn" class="demoInputBox" /></div>
        <label>R-S</label><span id="rs-error" class="signup-error"></span>
        <div><input type="number" name="rs" id="rs" class="demoInputBox" /></div>
        <label>S-T</label><span id="st-error" class="signup-error"></span>
        <div><input type="number" name="st" id="st" class="demoInputBox" /></div>

    </div>

    <div id="bebanamper-field" style="display:none;">
        <label>R</label><span id="r-error" class="signup-error"></span>
        <div><input type="number" name="r" id="r" class="demoInputBox" /></div>
        <label>S</label><span id="s-error" class="signup-error"></span>
        <div><input type="number" name="s" id="s" class="demoInputBox" /></div>
        <label>T</label><span id="t-error" class="signup-error"></span>
        <div><input type="number" name="t" id="t" class="demoInputBox" /></div>

    </div>

    <div id="kapasitasmcb-field" style="display:none;">
        <label>R</label><span id="rmcb-error" class="signup-error"></span>
        <div><input type="number" name="rmcb" id="rmcb" class="demoInputBox" /></div>
        <label>S</label><span id="smcb-error" class="signup-error"></span>
        <div><input type="number" name="smcb" id="smcb" class="demoInputBox" /></div>
        <label>T</label><span id="tmcb-error" class="signup-error"></span>
        <div><input type="number" name="tmcb" id="tmcb" class="demoInputBox" /></div>

    </div>

    <div id="warnakabel-field" style="display:none;">
        <label>R</label><span id="rwarna-error" class="signup-error"></span>
        <div><input type="text" name="rwarna" id="rwarna" value="Merah" class="demoInputBox" /></div>
        <label>N</label><span id="nwarna-error" class="signup-error"></span>
        <div><input type="text" name="nwarna" id="nwarna" value="Biru" class="demoInputBox" /></div>
        <label>S</label><span id="swarna-error" class="signup-error"></span>
        <div><input type="text" name="swarna" id="swarna" value="Kuning" class="demoInputBox" /></div>
        <label>G</label><span id="gwarna-error" class="signup-error"></span>
        <div><input type="text" name="gwarna" id="gwarna" value="Kuning hijau" class="demoInputBox" /></div>
        <label>T</label><span id="twarna-error" class="signup-error"></span>
        <div><input type="text" name="twarna" id="twarna" value="Hitam" class="demoInputBox" /></div>

    </div>

    <div id="luaspenampang-field" style="display:none;">
        <label>R</label><span id="rmm-error" class="signup-error"></span>
        <div><input type="number" name="rmm" id="rmm" value="6" class="demoInputBox" /></div>
        <label>N</label><span id="nmm-error" class="signup-error"></span>
        <div><input type="number" name="nmm" id="nmm" value="6" class="demoInputBox" /></div>
        <label>S</label><span id="smm-error" class="signup-error"></span>
        <div><input type="number" name="smm" id="smm" value="6" class="demoInputBox" /></div>
        <label>G</label><span id="gmm-error" class="signup-error"></span>
        <div><input type="number" name="gmm" id="gmm" value="6" class="demoInputBox" /></div>
        <label>T</label><span id="tmm-error" class="signup-error"></span>
        <div><input type="number" name="tmm" id="tmm" value="6" class="demoInputBox" /></div>

    </div>

    <div id="temuanrekomendasi-field" style="display:none;">
        <label>Temuan</label><span id="temuan-error" class="signup-error"></span>
        <div><textarea name="temuan" id="temuan" class="demoInputBox" rows="5" cols="50"></textarea></div>
        <label>Rekomendasi</label><span id="rekomendasi-error" class="signup-error"></span>
        <div><textarea name="rekomendasi" id="rekomendasi" class="demoInputBox" rows="5" cols="50"></textarea></div>


    </div>


    <div>
        <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
        <input class="btnAction" type="button" name="next" id="next" value="Next">
        <input class="btnAction" type="submit" name="finish" id="finish" value="Simpan" style="display:none;">
    </div>
    <?php echo form_close(); ?>

</body>

</html>