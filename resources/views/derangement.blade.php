@extends('template')

@php
    $sidebar = 'Dérangement';
@endphp


@section('container')
    <div class="row">
        <div class="col-xs-12">
            <h1 style="color: #0080ca;">LES DERANGEMENTS</h1>
            <hr class="tiret">
            <h2 style="color: rgba(0, 128, 202, 0.95);">Préléver les Dérangements par :</h2>
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active" id="formulaire">
                <input type="checkbox" autocomplete="off" checked> Formulaire
              </label>
              <label class="btn btn-warning" id="excel">
                <input type="checkbox" autocomplete="off"> Feuille Excel
              </label>
              <label class="btn btn-danger" id="autre">
                <input type="checkbox" autocomplete="off"> Autre
              </label>
            </div>
            <div class="row">
                <div class="col-xs-12" id="div_main">
                    <div class="row" id="row_border">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4" id="col_border">
                            <h1>
                                <h4 style="text-align: center;">PROCEDURE</h4>
                                <h4 style="text-align: center;">"GERER LE SERVICE APRES VENTE"</h4>
                            </h1>
                        </div>
                        <div class="col-sm-4" id="col_border1">
                            <div id="div1"><span>Réf : PR SAV 001</span><span>Version : 06</span></div>
                            <div id="div2"><span>Page 27 sur 34</span><span>Date d'émission : 07/04/2017</span></div>
                        </div>
                    </div>
                    <div class="row" id="row2">
                        <div class="col-sm-12"><h3>FICHE DE RELEVE DE DERANGEMENT</h3></div>
                    </div>
                    <div class="row" id="row3">
                        <div class="col-sm-4" id="col_border2">
                            <span>N° Ticket de signalisation : </span><br />
                            <span>Date de Signalisation : </span>
                        </div>
                        <div class="col-sm-4" id="col_border3">
                            <span class="col_cause">Causes</span>
                            <span class="col_defaut">Origine du défaut ADSL</span>
                        </div>
                        <div class="col-sm-4" id="col_border4">
                            <span class="col_cause">Causes</span>
                            <span class="col_defaut">Origine du défaut ADSL</span>
                        </div>
                    </div>
                    <div class="row" id="row5">
                        <div class="col-sm-4" id="col_border5">
                            <div id="border_1">
                                <span>RTC</span>
                                <span>
                                    <div class="form-check form-check-inline">
                                        <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                    </div>
                                </span>
                                <span>ADSL</span>
                                <span>
                                    <div class="form-check form-check-inline">
                                        <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                    </div>
                                </span>
                                <span>GSHDSL</span>
                                <span>LS</span>
                                <span>
                                    <div class="form-check form-check-inline">
                                        <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                    </div>
                                </span>
                            </div>
                            <div id="border_2">
                                <span>N° d'appel</span>
                            </div>
                            <div id="border_3">
                                <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                    <input type="number" style="width: 100%; height: 100%;" class="form-control" placeholder="Champ obligatoire">
                                </div>
                            </div>
                            <div id="border_4">
                                <span>Nom ou Raison Sociale</span>
                            </div>
                            <div id="border_5">
                                <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                    <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Champ obligatoire">
                                </div>
                            </div>
                            <div id="border_6">
                                <span>Adresse</span>
                                <span class="address_span">
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Entrez le quartier du client">
                                    </div>
                                </span>
                                <span class="address_span">
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Entrez le contact du client">
                                    </div>
                                </span>
                            </div>
                            <div id="border_7">
                                <span>Constat client</span>
                            </div>
                            <div id="border_8">
                                <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                    <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Quel est le constat fait par le client ?">
                                </div>
                            </div>
                            <div id="border_9">
                                <span class="border_9_span1">Catégorie client</span>
                                <span class="border_9_span">Résid</span>
                                <span class="border_9_span">
                                    <div class="form-check form-check-inline">
                                        <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                    </div>
                                </span>
                                <span class="border_9_span">Pro</span>
                                <span class="border_9_span">
                                    <div class="form-check form-check-inline">
                                        <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                    </div>
                                </span>
                            </div>
                            <div id="border_10">
                                <span>Nom SR</span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                            <option value="1" selected>D00</option>
                                            <option value="2">D01</option>
                                            <option value="2">D02</option>
                                        </select>
                                    </div>
                                </span>
                            </div>
                            <div id="border_11">
                                <span>Constitutions</span>
                            </div>
                            <div id="border_12">
                                <span>Equipement</span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Entrez le nom de l'équipement">
                                    </div>
                                </span>
                            </div>
                            <div id="border_13">
                                <span>Renvois</span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Champ facultatif">
                                    </div>
                                </span>
                            </div>
                            <div id="border_14">
                                <span>Port</span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="Entrez le nom du port">
                                    </div>
                                </span>
                            </div>
                            <div id="border_15">
                                <span>Transport</span>
                            </div>
                            <div id="border_16">
                                <span>Tête</span>
                                <span>Amorce</span>
                                <span>Paire</span>
                            </div>
                            <div id="border_17">
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                            <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                                <option value="1" selected>34</option>
                                                <option value="2">35</option>
                                                <option value="2">36</option>
                                            </select>
                                    </div>
                                </span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                            <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                                <option value="1" selected>4</option>
                                                <option value="2">5</option>
                                                <option value="2">6</option>
                                            </select>
                                    </div>
                                </span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="2">3</option>
                                        </select>
                                    </div>
                                </span>
                            </div>
                            <div id="border_18">
                                <span>Distribution</span>
                            </div>
                            <div id="border_19">
                                <span>Tête</span>
                                <span>Amorce</span>
                                <span>Paire</span>
                            </div>
                            <div id="border_20">
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                            <option value="1" selected>2</option>
                                            <option value="2">3</option>
                                            <option value="2">4</option>
                                        </select>
                                    </div>
                                </span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                            <option value="1" selected>7</option>
                                            <option value="2">8</option>
                                            <option value="2">9</option>
                                        </select>
                                    </div>
                                </span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                            <select style="width: 100%;height: 100%;margin-bottom: 0;" class="custom-select custom-select-lg mb-3">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="2">3</option>
                                            </select>
                                    </div>
                                </span>
                            </div>
                            <div id="border_21">
                                <span>Date de relève</span>
                                <span>Nom du technique</span>
                            </div>
                            <div id="border_22">
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="date" style="width: 100%; height: 100%;" class="form-control">
                                    </div>
                                </span>
                                <span>
                                    <div class="form-group" style="width: 100%;height: 100%;margin-bottom: 0;">
                                        <input type="text" style="width: 100%; height: 100%;" class="form-control" placeholder="ex : Primo">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4" id="col_border6">
                            <div id="border1_1" class="border1_1">
                                <div class="b1">
                                    <span>Commutation</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Autocommutation</span>
                                    <span>Equip. défectueux</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_2" class="border1_1">
                                <div class="b1">
                                    <span>RE</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvaise connection</span>
                                    <span class="b1_tiret">Protection</span>
                                    <span>Jarretière defectueuse</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_3" class="border1_1">
                                <div class="b1">
                                    <span>Cab. T</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvais isolement</span>
                                    <span class="b1_tiret">Ouverture</span>
                                    <span>Rupture accidentelle</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_4" class="border1_1">
                                <div class="b1">
                                    <span>SR</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvais connexion</span>
                                    <span class="b1_tiret">Oxydation</span>
                                    <span>Jarretière defectueuse</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_5" class="border1_1">
                                <div class="b1">
                                    <span>Cab. D</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvais isolement</span>
                                    <span class="b1_tiret">Vol</span>
                                    <span class="b1_tiret">Ouverture</span>
                                    <span class="b1_tiret">Rupture accidentelle</span>
                                    <span class="b1_tiret">Foudre</span>
                                    <span>Feu de brousse</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_6" class="border1_1">
                                <div class="b1">
                                    <span>RP</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvais connexion</span>
                                    <span class="b1_tiret">Parafoudre amorcé</span>
                                    <span>Oxydation</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_7" class="border1_1">
                                <div class="b1">
                                    <span>PC</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Foudre</span>
                                    <span class="b1_tiret">Rupture accientelle</span>
                                    <span class="b1_tiret">Mauvais connexion</span>
                                    <span>Oxydation</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_8" class="border1_1">
                                <div class="b1">
                                    <span>Cab. B</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvaise isolement</span>
                                    <span class="b1_tiret">Rupture accidentelle</span>
                                    <span>Feu de brousse</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_9" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>E.D.P</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvaise connexion</span>
                                    <span class="b1_tiret">Oxydation</span>
                                    <span class="b1_tiret">Parafoudre amorcé</span>
                                    <span>Fusible fondu</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_10" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>Cab. I</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvaise isolement</span>
                                    <span>Ouverture</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_11" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>Prise</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Mauvaise connexion</span>
                                    <span>Oxydation</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_12" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>Poste</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Fiche défectueuse</span>
                                    <span class="b1_tiret">Cordon défectueux</span>
                                    <span>Appareil défectueux</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_13" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>IP</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Boucle en installation</span>
                                    <span class="b1_tiret">Terre en installation</span>
                                    <span>Ouveture en installation</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border1_10" class="border1_1 brdr_left">
                                <div class="b1">
                                    <span>Fausse Signalisation</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">RAS</span>
                                    <span>Fausse manoeuvre</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" id="col_border7">
                            <div id="border2_1" class="border2_1">
                                <div class="b1">
                                    <span>CNPDI</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Authentification</span>
                                    <span>DSLAM</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border2_2" class="border2_1">
                                <div class="b1">
                                    <span>Réseau</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Authentification</span>
                                    <span class="b1_tiret">DSLAM</span>
                                    <span>DSLAM</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border2_3" class="border2_1">
                                <div class="b1">
                                    <span>Client</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">PC client</span>
                                    <span class="b1_tiret">Mot de passe</span>
                                    <span class="b1_tiret">Cable intérieur</span>
                                    <span class="b1_tiret">Reconfig</span>
                                    <span class="b1_tiret">Pas de modem</span>
                                    <span class="b1_tiret">Filtre</span>
                                    <span class="b1_tiret">Débit</span>
                                    <span class="b1_tiret">Rout/Mod HS</span>
                                    <span>RAS</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div id="border2_4" class="border2_1">
                                <div class="b1">
                                    <span>MSAN</span>
                                </div>
                                <div class="b2">
                                    <span class="b1_tiret">Authentification</span>
                                    <span class="b1_tiret">Port sans voix</span>
                                    <span class="b1_tiret">Port sans adsl</span>
                                    <span class="b1_tiret">Port sans voix et sans adsl</span>
                                    <span class="b1_tiret">Rupture fibre</span>
                                    <span class="b1_tiret">Rupture energie</span>
                                    <span>MSAN accidenté</span>
                                </div>
                                <div class="b3">
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="b1_tiret brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                    <span class="brnone">
                                        <div class="form-check form-check-inline">
                                            <input class="custom-control-input check1" type="checkbox" value="" id="customCheck1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12" id="div_main1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <!-- Nous avons ici notre label et l'input afférent -->
                    <form method="post" action="controller/importExcel.php" enctype="multipart/form-data">
                        <label for="file" class="label-file" id="lab_form" style="font-size: 18px;"><span class="glyphicon glyphicon-file" id="choix2"></span><span id="choix1">Choisir un fichier excel</span></label>
                        <input id="file" name="excel" class="input-file" type="file">
                        <input type="reset" name="reset" class="reset">
                        <button type="submit" class="btn btn-info import">Impoter les données</button>
                    </form>
                </div>
                <div class="col-xs-12" id="div_main2"></div>
            </div>
            <h2 style="color: rgba(0, 128, 202, 0.95);">Tableau des dérangements</h2>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            Choisissez le type de signalisation que vous voulez consulter :
                            <select class="custom-select custom-select-lg mb-3">
                                <option value="1" selected>RTC</option>
                                <option value="2">ADSL</option>
                                <option value="2">RTC+ADSL</option>
                            </select>
                        </div>
                        <div class="panel-body">
                            <p>
                                Le tableau ci-dessous un tableau interactif qui permet de visualiser en temps réel les dérangements des clients selon leur type (RTC, ADSL ou les deux). Vous pourrez de ce fait, en fonction de la spécificité de votre recherche utiliser les filtres ci-dessous :
                            </p>
                            <div style="display: flex; flex-direction: row; align-items: center;">
                                <div>
                                    <span class="text-info">Filtrer par :</span> 
                                    <select class="custom-select custom-select-lg mb-3">
                                        <option value="1" selected>Date de signalisation</option>
                                        <option value="2">Raison Sociale</option>
                                        <option value="2">N° d'appel</option>
                                        <option value="2">Sous Répartition</option>
                                    </select>   
                                </div>
                                <div>
                                    <span class="text-info">Ordre de filtrage :</span>
                                    <select class="custom-select custom-select-lg mb-3">
                                        <option value="1" selected>Ordre croissant</option>
                                        <option value="2">Ordre décroissant</option>
                                    </select>
                                </div>
                                <div>
                                    <form class="navbar-form navbar-left" style="display: inline-block;" role="search">
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Recherche">
                                      </div>
                                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" style="font-size: 19px;"></span></button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                        <!-- Table -->
                        <table class="table table-striped table-hover table-responsive cd_table">
                            <thead>
                                <tr class="htable">
                                    <th class="num" scope="col" class="t_title">#</th>
                                    <th scope="col" class="t_title">Raison Social</th>
                                    <th scope="col" class="t_title">N° Ticket</th>
                                    <th scope="col" class="t_title">N° d'appel</th>
                                    <th scope="col" class="t_title">Contact</th>
                                    <th scope="col" class="t_title">Catégorie</th>
                                    <th scope="col" class="t_title">Type SI</th>
                                    <th scope="col" class="t_title">Causes</th>
                                    <th scope="col" class="t_title">Résolution</th>
                                    <th scope="col" class="t_title">
                                        <span style="color: #0080ca;">+d'infos</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>   
                                <tr class="tr">
                                    <th class="num" scope="row">
                                        1
                                    </th>
                                    <th scope="row">
                                        Job Steeve
                                    </th> 
                                    <th scope="row">
                                        TTT-0215478
                                        </th> 
                                    <th scope="row">
                                        01716809
                                    </th> 
                                    <th scope="row">
                                        xxxxxxxx
                                    </th> 
                                    <th scope="row">
                                        Résidence
                                    </th> 
                                    <th scope="row">
                                        RTC
                                    </th> 
                                    <th scope="row">
                                        PC
                                    </th> 
                                    <th scope="row">
                                        Mauvaise connection
                                    </th>

                                    <td style="text-align: center;">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>  
                                <tr class="tr">
                                    <th class="num" scope="row">
                                        2
                                    </th>
                                    <th scope="row">
                                        Bill Gate
                                    </th> 
                                    <th scope="row">
                                        TTT-0215214
                                        </th> 
                                    <th scope="row">
                                        01713365
                                    </th> 
                                    <th scope="row">
                                        xxxxxxxx
                                    </th> 
                                    <th scope="row">
                                        Résidence
                                    </th> 
                                    <th scope="row">
                                        ADSL
                                    </th> 
                                    <th scope="row">
                                        SR
                                    </th> 
                                    <th scope="row">
                                        Ouverture
                                    </th>

                                    <td style="text-align: center;">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>  
                                <tr class="tr">
                                    <th class="num" scope="row">
                                        3
                                    </th>
                                    <th scope="row">
                                        Jacob Zouma
                                    </th> 
                                    <th scope="row">
                                        TTT-0218955
                                        </th> 
                                    <th scope="row">
                                        01718578
                                    </th> 
                                    <th scope="row">
                                        xxxxxxxx
                                    </th> 
                                    <th scope="row">
                                        Proféssionel
                                    </th> 
                                    <th scope="row">
                                        RTC+ADSL
                                    </th> 
                                    <th scope="row">
                                        EDP
                                    </th> 
                                    <th scope="row">
                                        oxydation
                                    </th>

                                    <td style="text-align: center;">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('sidebar', $sidebar)