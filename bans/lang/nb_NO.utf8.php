<?php

#[AllowDynamicProperties]
class nb_NO {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;

        $array["index.welcome.main"] = "Velkommen til {server}'s Ban Liste.";
        $array["index.welcome.sub"] = "Her er alle dine straffer oppført.";

        $array["title.index"] = 'Hjem';
        $array["title.bans"] = 'Utestengelser';
        $array["title.mutes"] = 'Dempelser';
        $array["title.warnings"] = 'Advarsler';
        $array["title.kicks"] = 'Spark';
        $array["title.player-history"] = "Nylige straffer for {name}";
        $array["title.staff-history"] = "Nylige straffer av {name}";


        $array["generic.ban"] = "Utestengt";
        $array["generic.mute"] = "Dempet";
        $array["generic.warn"] = "Advarsel";
        $array["generic.kick"] = "Sparket";

        $array["generic.unban"] = "Unban";
        $array["generic.unmute"] = "Unmute";

        $array["generic.banned"] = "Utestengt";
        $array["generic.muted"] = "Dempet";
        $array["generic.warned"] = "Advart";
        $array["generic.kicked"] = "Sparket";

        $array["generic.unbanned"] = "Utestengelse Opphevet";
        $array["generic.unmuted"] = "Dempelsen Opphevet";

        $array["generic.banned.by"] = $array["generic.banned"] . " Av";
        $array["generic.muted.by"] = $array["generic.muted"] . " Av";
        $array["generic.warned.by"] = $array["generic.warned"] . " Av";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " Av";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Permanent";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Type";
        $array["generic.active"] = "Aktiv";
        $array["generic.inactive"] = "Inaktiv";
        $array["generic.expired"] = "Utløpt";
        $array["generic.expired.kick"] = "N/A";
        $array["generic.player-name"] = "Spiller";

        $array["page.expired.ban"] = '(' . $array["generic.unbanned"] . ')';
        $array["page.expired.ban-by"] = '(' . $array["generic.unbanned"] . ' av {name})';
        $array["page.expired.mute"] = '(' . $array["generic.unmuted"] . ')';
        $array["page.expired.mute-by"] = '(' . $array["generic.unmuted"] . ' av {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Moderator";
        $array["table.reason"] = "Årsak";
        $array["table.reason.unban"] = $array["generic.unban"] . " " . $array["table.reason"];
        $array["table.reason.unmute"] = $array["generic.unmute"] . " " . $array["table.reason"];
        $array["table.date"] = "Dato";
        $array["table.expires"] = "Utløper";
        $array["table.received-warning"] = "Mottatt Advarsel";


        $array["table.server.name"] = "Server";
        $array["table.server.scope"] = "Serverområde";
        $array["table.server.origin"] = "Server";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Side";

        $array["action.check"] = "Sjekk";
        $array["action.return"] = "Returner til {origin}";

        $array["error.missing-args"] = "Mangler argumenter.";
        $array["error.name.unseen"] = "{name} har ikke vært på serveren før.";
        $array["error.name.invalid"] = "Ugyldig navn.";
        $array["history.error.uuid.no-result"] = "Ingen straffer funnet.";
        $array["info.error.id.no-result"] = "Feil: {type} ikke funnet i databasen.";
    }
}
