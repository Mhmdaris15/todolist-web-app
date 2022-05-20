<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/header.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/reset.css">
    <link rel="stylesheet" href="<?= BASEURL?>/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #0B0F39;">
<div class="container position-absolute">
    <ul class="d-flex flex-column justify-content-center bd-highlight">
        <li><button type="button" class="btn btn-outline-primary my-3"> <i class="fa fa-calendar" aria-hidden="true"></i> Event</button></li>
        <li><button type="button" class="btn btn-outline-secondary my-3"><i class="fa fa-suitcase" aria-hidden="true"></i> Work</button></li>
        <li><button type="button" class="btn btn-outline-success my-3"><i class="fa fa-plane" aria-hidden="true"></i> Travel</button></li>
        <li><button type="button" class="btn btn-outline-danger my-3"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Ideas</button></li>
    </ul>
</div>

<main class="container2 position-absolute">
    <h1 class="to-do-title"><i class="fa fa-calendar" aria-hidden="true"></i>Work</h1>
    <hr>
    <div class="time">
        <h2>Today</h2>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
    </div>
    <div class="time">
        <h2>Tomorrow</h2>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
        </div>
    </div>
</main>