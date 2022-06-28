@extends('layouts.default')
@section('title', env('APP_NAME'))
@section('content')


<div class="main-body">
    <div class="page-wrapper">
        <div class="page-header">
            <div class="page-header-title">
                <h4>Liste des factures</h4>
            </div>
           <!-- <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Pages</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                    </li>
                </ul>
            </div>-->
        </div>

<div class="page-body">

<div class="card">

    <div class="card-header">
<div class="row">
            <div class="col-sm-12 col-xl-3 m-b-30">

                <select name="select" class="form-control form-control-default">
                    <option value="opt1">Sélectionner une action</option>
                    <option value="opt2">Ajouter les frais d'approche</option>
                    <option value="opt3">Modifier les frais d'approche</option>
                    <option value="opt4">Modifier la facture</option>
                    <option value="opt5">Supprimer la facture</option>

                </select>
            </div>
            <div class="col-sm-12 col-xl-3 m-b-30" style="padding-left: inherit;">

                                <button type="button" class="btn btn-primary" id="primary-popover-content" data-container="body" data-toggle="popover" title="Primary color states" data-placement="bottom" data-content="<div class='color-code'> ">  Appliquer</button>

            </div>

    </div>
</div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>Tiger Nixon</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

    </div>
</div>
</div>
@stop
