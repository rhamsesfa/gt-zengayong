@extends('template')

@php
    $sidebar = 'Accueil';
@endphp


@section('container')
    <div class="row">
        <div class="col-xs-12" id="carousel">
            <img src="{{ 'img/slide/7.png' }}" class="item"/>
            <img src="{{ 'img/slide/1.png' }}" class="item"/>
            <img src="{{ 'img/slide/2.png' }}" class="item"/>
            <img src="{{ 'img/slide/3.jpg' }}" class="item"/>
            <img src="{{ 'img/slide/4.jpg' }}" class="item"/>
            <img src="{{ 'img/slide/5.jpg' }}" class="item"/>
            <img src="{{ 'img/slide/6.jpg' }}" class="item"/>
            <img src="{{ 'img/slide/8.jpg' }}" class="item"/>
            <img src="{{ 'img/slide/9.jpg' }}" class="item"/>
        </div>
        <div class="col-xs-12">
            <h1 style="color: #0080ca;">ACCUEIL : Nous gerons le SAV</h1>
            <hr class="tiret">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h1 style="color: #0080ca;">Les dérangements</h1>
            <hr class="tiret">
            <h2 style="color: rgba(0, 128, 202, 0.95);">Les dérangements ADSL</h2>
            <div class="row">
                <div class="col-sm-6">
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-6" style="display: flex; align-content: center; justify-content: center; flex-direction: column; align-items: center;">
                    <img style="width: 200px; height: 200px;" src="{{ 'img/argus.jpg' }}">
                    <span style="color: #444;">Equipement permettant de sonder le réseau internet</span>
                </div>
                
            </div>
            <h2 style="color: rgba(0, 128, 202, 0.95);">Les dérangements RTC</h2>
            <div class="row">
                <div class="col-sm-6" style="color: #444; text-align: center;">
                    <img style="width: 400px; height: 200px;" src="{{ 'img/connection.jpg' }}">
                    <img style="width: 150px; height: 200px;" src="{{ 'img/prise.jpg' }}">
                    <span>Prise Femelle et Equipements réseaux Intérieurs</span>
                </div>
                <div class="col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>                  
            </div>
        </div>
        <div class="col-xs-12">
            <h1 style="color: #0080ca;">La Géolocalisation</h1>
            <hr class="tiret">
            <h2 style="color: rgba(0, 128, 202, 0.95);">Géolocalisation des équipements</h2>
            <div class="row">
                <div class="col-sm-6" style="width: 30%;">
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-6" style="display: flex; align-content: center; justify-content: center; flex-direction: column; align-items: center; width: 70%">
                    <img style="width: 700px; height: 400px;" src="{{ 'img/sat1.JPG' }}">
                    <span style="color: #444;">Cartographie des équipements</span>
                </div>
                
            </div>
            <h2 style="color: rgba(0, 128, 202, 0.95);">Nous géolocalisons nos clients</h2>
            <div class="row">
                <div class="col-sm-6" style="display: flex; align-content: center; justify-content: center; flex-direction: column; align-items: center; width: 70%">
                    <img style="width: 700px; height: 400px;" src="{{ 'img/sat2.JPG' }}">
                    <span style="color: #444;">Cartographie des clients dont l'abonnement est en cours</span>
                </div>

                <div class="col-sm-6" style="width: 30%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>                  
            </div>
        </div>
        <div class="col-xs-12">
            <h1 style="color: #0080ca;">Taux de Signalisation : TSI</h1>
            <hr class="tiret">
            <h2 style="color: rgba(0, 128, 202, 0.95);">TSI fixe et ADSL : graphique d'évolution annuelle</h2>
            <div class="row">
                <div class="col-sm-6" style="width: 30%;">
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-6" style="display: flex; align-content: center; justify-content: center; flex-direction: column; align-items: center; width: 70%">
                    <img style="width: 700px; height: 400px;" src="{{ 'img/analysis.jpg' }}">
                    <span style="color: #444;">graphique d'évolution annuelle</span>
                </div>
                
            </div>
            <h2 style="color: rgba(0, 128, 202, 0.95);">TSI fixe et ADSL : tableau recapitulatif</h2>
            <div class="row">
                <div class="col-sm-6" style="display: flex; align-content: center; justify-content: center; flex-direction: column; align-items: center; width: 70%">
                    <img style="width: 700px; height: 400px;" src="{{ 'img/pexels.jpeg' }}">
                    <span style="color: #444;">Tableau de Signalisation</span>
                </div>

                <div class="col-sm-6" style="width: 30%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>                  
            </div>
        </div>
    </div>  
@endsection

@section('sidebar', $sidebar)