<!DOCTYPE html>
<html>
    <head>
        <title>
            Send Mail
        </title>
        <link href="" rel="stylesheet" type="text/css">
            <link href="css/materialize/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css"/>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            </link>
        </link>
    </head>
    <body>
        <nav class="blue">
            <div class="nav-wrapper container">
                <a class="brand-logo" href="#">
                    Logo
                </a>
                <ul class="right hide-on-med-and-down" id="nav-mobile">
                    <li>
                        <a href="index.php">
                            Send Mail
                        </a>
                    </li>
                    <li>
                        <a href="agence_site.php">
                            Agence Site
                        </a>
                    </li>
                    <li>
                        <a href="collapsible.html">
                            JavaScript
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
<?php include_once 'l_mail.php'; ?>	
        <div class="container">
            <h4 style="border-bottom: 1px grey solid;padding: 15px 0px 4px 0px;">
                Add mail list ( Saisir )
            </h4>
            <form action="index.php" method="post">
                <div class="">
                    <div class="">
                        <label for="m_mail">
                            Mail:
                        </label>
                        <input autofocus="" id="m_mail" name="m_m" type="text">
                        </input>
                    </div>
                    <!-- <input type="submit" name="send_m"> -->
                    <button class="btn waves-effect waves-light right darkgreen" name="send_m" type="submit">
                        Submit
                        <i class="material-icons right">
                            send
                        </i>
                    </button>
                </div>
            </form>
        </div>
        <div class="container">
            <h4 style="border-bottom: 1px grey solid;padding: 15px 0px 4px 0px;">
                Add mail from file text
            </h4>
            <div class="row">
                <form action="index.php" class="col s12" enctype="multipart/form-data" method="post">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>
                                File
                            </span>
                            <input name="m_file" type="file">
                            </input>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            </input>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light right darkgreen" name="act_ion" type="submit">
                        Submit
                        <i class="material-icons right">
                            send
                        </i>
                    </button>
                </form>
            </div>
        </div>
        <div class="container">
            <h4 style="border-bottom: 1px grey solid;padding: 15px 0px 4px 0px;">
                Config:
            </h4>
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="validate" disabled="" id="disabled" type="text" value="I am not editable">
                            <label for="disabled">
                                Disabled
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="validate" id="password" type="password">
                            <label for="password">
                                Password
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="validate" id="email" type="email">
                            <label for="email">
                                Email
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        This is an inline input field:
                        <div class="input-field inline">
                            <input class="validate" id="email" type="email">
                                <label data-error="wrong" data-success="right" for="email">
                                    Email
                                </label>
                            </input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jq.js" type="text/javascript">
        </script>
        <script src="js/materialize/materialize.min.js" type="text/javascript">
        </script>
    </body>
</html>