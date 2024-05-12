
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name') }}</title>
    <style>
        /* -------------------------------------
              GLOBAL RESETS
          ------------------------------------- */

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }
        .im{
            color: #222;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
              BODY & CONTAINER
          ------------------------------------- */

        .body {
            background-color: #ffffff !important;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */

        .container {
            display: block;
            Margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */

        .content {
            box-sizing: border-box;
            display: block;
            Margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
              HEADER, FOOTER, MAIN
          ------------------------------------- */

        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            Margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
              TYPOGRAPHY
          ------------------------------------- */

        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            Margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }


        .logo {
            text-align: left;
            background-size: cover;
            overflow: hidden;
            width: 100%;
        }

        .logo .overlay {
            width: 100%;
            height: 100%;
            padding: 20px 0;
            text-align: center;
        }

        .logo img {
            width: 30%;
            /* margin-left: 10px; */
        }

        .wrapper .wel-hd {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            margin-top: 20px;
        }

        .wrapper .mem-dt {
            text-align: center;
        }

        .mem-dt {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .mem-dt p {
            margin-bottom: 30px;
            font-size: 13px;
            overflow: hidden;
        }

        .mem-dt img {
            width: 25%;
            margin-bottom: 20px;
        }
        .mem-dt img#qrcode_img{
            width: 40%;
        }

        .mem-dt .btn {
            color: #ffffff;
            background: rgb(44, 177, 242);
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 4px;
            margin-bottom: 30px;
            font-size: 13px;
            border: none;
            font-weight: 500;
        }

        .mem-dt .dwn-txt {
            text-align: left;
        }

        /* -------------------------------------
              RESPONSIVE AND MOBILE FRIENDLY STYLES
          ------------------------------------- */

        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }
            table[class=body] .content {
                padding: 0 !important;
            }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }
            table[class=body] .btn table {
                width: 100% !important;
            }
            table[class=body] .btn a {
                width: 100% !important;
            }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
              PRESERVE THESE STYLES IN THE HEAD
          ------------------------------------- */

        @media all {
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }
            .btn-primary table td:hover {
                background-color: #34495e !important;
            }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }


        @media (max-width: 375px) {
            .wrapper .wel-hd {
                font-size: 18px;
            }

            .mem-dt p {
                margin-bottom: 30px;
                font-size: 12px !important;
                overflow: hidden;
            }

            .mem-dt img {
                width: 30%;
            }

            .mem-dt .btn {
                padding: 12px 20px;
                font-size: 12px;
            }
        }

        @media (max-width: 320px) {
            .wrapper .wel-hd {
                font-size: 18px;
            }
        }
    </style>
</head>

<body class="">
<table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table class="main">

                    <!-- START MAIN CONTENT AREA -->

                    <div class="logo">
                        <div class="overlay">
                            <img src="{{ asset('image/logo/logo.png') }}" alt="">
                        </div>
                    </div>
                    <tr>
                        <td class="wrapper">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <div class="mem-dt" style="text-align: left; padding-bottom: 20px;">
                                            <h2 class="wel-hd" style="text-align: left">
                                                @if (! empty($greeting))
                                                    {{ $greeting }}
                                                @else
                                                    @lang("Hello Admin, ")
                                                @endif
                                            </h2>
                                            <p>
                                             A New {{ $appointment->appointment_type }} appointment has just been booked for {{ $appointment->appointment_time }}, {{ $appointment->appointment_date }} and payment made successfully by {{ $user->firstname. ' '.$user->lastname }}
                                            <br>
                                            <br>
                                            </p>

                                            <br>

                                            <br>
                                            {{-- Salutation --}}
                                            @if (! empty($salutation))
                                                {{ $salutation }}
                                            @else
                                                <p>
                                                    @lang('Best Regards'),<br>
                                                    {{ config('app.name') }}
                                                </p>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>
                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                    <!-- Body content -->
                    <tr>
                        <td class="content-cell">

                        </td>
                    </tr>
                </table>


                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>

</html>

