<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/cookie-policy.css"/>


    <title>Cookie Policy | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="cookiePolicy">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            COOKIE POLICY
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="cookiePolicy-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cookiePolicy">
                        Il sito web di GrezzoniForever (di seguito indicato anche come “Sito”) utilizza i Cookie per rendere i propri servizi
                        semplici ed efficienti per l’utenza che visita le pagine del portale.
                        I Cookie sono file di testo, ovvero pacchetti di informazioni inviati da un web server
                        (il sito www.grezzoniforever.it) al browser dell’utente, da quest’ultimo memorizzati sul computer e rinviati
                        automaticamente al server ad ogni successivo accesso al sito.
                        Vi sono vari tipi di Cookie, alcuni utilizzati per rendere più efficace l’uso del Sito,
                        altri per abilitare determinate funzionalità. Ad esempio i Cookie possono permettere di:
                        <ul style="font-size: 1em">
                            <li>memorizzare le preferenze inserite</li>
                            <li>
                                evitare di reinserire le stesse informazioni più volte durante la visita
                                quali ad esempio nome utente e password
                            </li>
                            <li>
                                analizzare l’utilizzo dei servizi e dei contenuti forniti dal sito
                                che si sta visitando per ottimizzarne l’esperienza di navigazione e i servizi offerti
                            </li>
                        </ul>

                        <h3>Tipologie di Cookie utilizzati dal sito web di GrezzoniForever</h3>
                        Di seguito si riportano le tipologie di Cookie utilizzati dal sito web di GrezzoniForever,
                        raggruppandoli in funzione delle finalità con cui essi vengono utilizzati.

                        <h4>Cookie Tecnici</h4>

                        Questa tipologia di Cookie permette il corretto funzionamento di alcune sezioni del Sito
                        e sono fondamentali per consentire all’utente di navigare all’interno del Sito ed utilizzarne le funzionalità.
                        Possono essere di due categorie:
                        <ul style="font-size: 1em">
                            <li>persistenti: una volta chiuso il browser non vengono cancellati, ma persistono fino ad una data di scadenza preimpostata</li>
                            <li>di sessione: vengono cancellati automaticamente ogni volta che il browser viene chiuso.</li>
                        </ul>



                        Questi Cookie, inviati sempre dal dominio “GrezzoniForever.it”, sono necessari a visualizzare correttamente
                        il Sito e, in relazione ai servizi tecnici offerti, verranno quindi sempre utilizzati e inviati
                        (a meno che l’utente non modifichi le impostazioni nel proprio browser).
                        Rientrano in questa categoria i Cookie persistenti utilizzati per consentire all’utente di registrarsi al Sito e accedere all’area riservata dello stesso.
                        I predetti Cookies utilizzati dal Sito evitano il ricorso ad altre tecniche informatiche potenzialmente pregiudizievoli per la riservatezza della navigazione degli utenti e non acquisiscono dati personali identificativi dell'utente.

                        <h4>Functionality Cookie</h4>

                        I Cookie di questa categoria sono utilizzati per memorizzare alcune impostazioni selezionate dall’utente,
                        in modo da ricordarne le preferenze durante una visita successiva.
                        Questi cookies possono avere durata di sessione ma in generale sono persistenti e vengono inviati dal dominio
                        “GrezzoniForever.it”. Essi possono essere implementati anche nella fornitura di un servizio non esplicitamente richiesto
                        ma offerto all’utente.
                        Le informazioni raccolte da questi cookies sono anonime e non possono tracciare il comportamento dell’utente su altri siti.
                        In questa categoria rientrano ad esempio i Cookie di prima parte utilizzati per memorizzare le preferenze
                        espresse dall’utente in merito al Paese di origine e quindi alla lingua con cui visualizzare il testo del Sito.

                        <h4>Performance Cookie</h4>

                        I Cookie di questa categoria (che comprendono anche i cosiddetti “Cookie analytics”) vengono utilizzati
                        per collezionare informazioni sull’uso del sito.
                        Il sito web di GrezzoniForever utilizza queste informazioni per ottenere analisi statistiche anonime al fine di migliorare
                        l’utilizzo del proprio Sito e per rendere i contenuti più allineati ai desideri dei visitatori.
                        Questa tipologia di Cookie raccoglie dati in forma anonima sull’attività dell’utenza e su come è arrivata sul Sito.
                        I Cookie analitici possono essere inviati dal Sito stesso (cosiddetti Cookie di “prima parte”)
                        ma generalmente sono inviati da domini / siti web di terze parti (cosiddetti Cookie “di terza parte”).
                        In questa categoria rientrano ad esempio i Web Analytics, dove i dati raccolti sono limitati solamente
                        all’utilizzo del sito internet da parte dell’operatore, al numero di accessi al sito, per gestire
                        la performance e la struttura del sito. Tali cookie sono generalmente di natura persistente.

                        <h2>Consenso da parte dell’utente</h2>

                        Il sito web di GrezzoniForever, secondo la normativa vigente, non è tenuto a chiedere il consenso per i Cookie tecnici
                        e analitici di prima parte, in quanto necessari a fornire i servizi richiesti.
                        Questi ultimi di conseguenza vengono installati automaticamente dal Sito alla prima visita da parte dell’utente
                        di una qualsiasi pagina del portale.
                        Per tutte le altre tipologie di Cookie viene invece richiesto il consenso tramite un banner a comparsa:
                        esso implica un comportamento attivo da parte dell’utente, ovvero quest’ultimo può esprimere il proprio consenso
                        cliccando sull’apposito tasto “OK”.

                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('partials/_footer'); ?>
</div>

</body>
</html>