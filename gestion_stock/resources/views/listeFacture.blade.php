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
                    <option value="Ajouter les frais dapproche">Ajouter les frais d'approche</option>
                    <option value="Modifier les frais dapproche">Modifier les frais d'approche</option>
                    <option value="Modifier la facture">Modifier la facture</option>
                    <option value="Modifier la facture">Ajouter des produits à la facture</option>
                    <option value="Modifier la facture">Ajouter de nouveaux produits à la facture</option>
                    <option value="Supprimer la facture">Supprimer la facture</option>

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

                        <th>N° Facture</th>
                        <th>Date </th>
                        <th>Fournisseur</th>
                        <th>Total HT</th>
                        <th>Total TTC</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>

                    </tr>
                    <tr>

                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>

                    </tr>

                </tbody>

            </table>
        </div>
    </div>

    </div>
</div>
</div>
@stop
