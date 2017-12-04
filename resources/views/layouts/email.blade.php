<!doctype html>
<html>
<head>
    <title>Email Notification</title>
    <style>
    html{font-size:12px;}
        .email-header header{
            background-color: #252525;}
            .email-header h3{
                margin: 0;
                line-height: 2;}
                .email-body{
                    color: #252525;
                    font-family: 'Open Sans', sans-serif;
                    width: 80%;
                    margin: auto;
                    display: block}
                    .email-body ul > li{list-style-type:none;}
                    .msg-container{
                        font-size: 1.35rem;
                        text-align: left;}
                        .msg-container a{
                            color: #252525;
                            text-decoration: underline;}
                             .msg-container a:active, .msg-container a:hover{
                                color: #e60000;}
                .email-warning{
                    color: #e60000;}

                .email-footer{
                    background-color: #252525;
                    color: #FFFFFF;
                    line-height: 2;
                    font-size: 1.3rem;}

    .insight-green{color: #d1df44;}
    .insight-blue{color:#92d2d4;}
    .site-header{font-size:4.5rem;font-weight:bold;border-bottom:1px solid #252525;}
    .report-date{font-size:2rem;color:#000000;}
    .text-h1{font-size:2.5rem;color:#000000;font-weight:bold;}
    .text-h2{font-size:2rem;color:#000000;}
    .text-up{text-transform: uppercase;}
    .main-container{min-height:80%;}
    .text-h3{font-size:2.5rem;text-align:center;}
    .text-center{text-align:center;}
    .email-btn-standard{
        display: block;
        margin: 0 auto;
        padding: 1%;
        width: 25%;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none !important;
        font-size: 1.75rem;
        font-weight: bold;
        transition-duration: 0.3s;
        border: 1px solid #252525 !important; }
    .email-btn-standard:hover{
        color: #fff !important;
        background-color: #363636;
        border: 1px solid #363636;
        transition-duration: 0.5s;}
    .btn-green{
        background-color:  #D1DF44;
        color: #000;
        border:  solid 1px #D1DF44;}
    </style>
</head>
    <body class="text-center email-body">
        <div class="email-header">
                {{-- Top Banner for Emails --}}
                <header>
                        <h3 class="insight-green black-back">
                            {{-- <img src="images/insight-technologies-logo.png" /> --}}
                            <img src="https://www.greatinsight.com/wp-content/themes/insight_ulistic/images/logo.png" />
                        </h3>
                    </header>
            <div class="content email-body">
                @yield('content')
            </div>

            <div class="email-footer insight-green" >
                {{-- Email Footer/Contact Information --}}
                <p>&copy; Insight Technologies, <?php echo date("Y"); ?> | <a class="insight-blue" href="http://greatinsight.com/" title="Insight Technologies" target="_blank">greatinsight.com</a><br />
                            Grand Forks Office: <span class="insight-blue">2600 Demers Ave. #101, Grand Forks ND 58201 | 701-775-5512</span><br />
                             Fargo Office: <span class="insight-blue">1402 43rd ST. S. #200, Fargo ND 58103 | 701-280-9040</span>
                </p>
        </div>
    </body>
</html>
