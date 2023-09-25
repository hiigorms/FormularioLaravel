<?php

namespace Illuminate\Redis\Connections;

use Closure;
use Illuminate\Contracts\Redis\Connection as ConnectionContract;
use Redis;
use RedisException;

/**
 * @mixin \Redis
 */
class PhpRedisConnection extends Connection implements ConnectionContract
{
    use PacksPhpRedisValues;

    /**
     * The connection creation callback.
     *
     * @var callable
     */
    protected $connector;

    /**
     * The connection configuration array.
     *
     * @var array
     */
    protected $config;

    /**
     * Create a new PhpRedis connection.
     *
     * @param  \Redis  $client
     * @param  callable|null  $connector
     * @param  array  $config
     * @return void
     */
    public function __construct($client, callable $connector = null, array $config = [])
    {
        $this->client = $client;
        $this->config = $config;
        $this->connector = $connector;
    }

    /**
     * Returns the value of the given key.
     *
     * @param  string  $key
     * @return string|null
     */
    public function get($key)
    {
        $result = $this->command('get', [$key]);

        return $result !== false ? $result : null;
    }

    /**
     * Get the values of all the given keys.
     *
     * @param  array  $keys
     * @return array
     */
    public function mget(array $keys)
    {
        return array_map(function ($value) {
            return $value !== false ? $value : null;
        }, $this->command('mget', [$keys]));
    }

    /**
     * Set the string value in the argument as the value of the key.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  string|null  $expireResolution
     * @param  int|null  $expireTTL
     * @param  string|null  $flag
     * @return bool
     */
    public function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
    {
        return $this->command('set', [
            $key,
            $value,
            $expireResolution ? [$flag, $expireResolution => $expireTTL] : null,
        ]);
    }

    /**
     * Set the given key if it doesn't exist.
     *
     * @param  string  $key
     * @param  string  $value
     * @return int
     */
    public function setnx($key, $value)
    {
        return (int) $this->command('setnx', [$key, $value]);
    }

    /**
     * Get the value of the given hash fields.
     *
     * @param  string  $key
     * @param  mixed  ...$dictionary
     * @return array
     */
    public function hmget($key, ...$dictionary)
    {
        if (count($dictionary) === 1) {
            $dictionary = $dictionary[0];
        }

        return array_values($this->command('hmget', [$key, $dictionary]));
    }

    /**
     * Set the given hash fields to their respective values.
     *
     * @param  string  $key
     * @param  mixed  ...$dictionary
     * @return int
     */
    public function hmset($key, ...$dictionary)
    {
        if (count($dictionary) === 1) {
            $dictionary = $dictionary[0];
        } else {
            $input = collect($dictionary);

            $dictionary = $input->nth(2)->combine($input->nth(2, 1))->toArray();
        }

        return $this->command('hmset', [$key, $dictionary]);
    }

    /**
     * Set the given hash field if it doesn't exist.
     *
     * @param  string  $hash
     * @param  string  $key
     * @param  string  $value
     * @return int
     */
    public function hsetnx($hash, $key, $value)
    {
        return (int) $this->command('hsetnx', [$hash, $key, $value]);
    }

    /**
     * Removes the first count occurrences of the value element from the list.
     *
     * @param  string  $key
     * @param  int  $count
     * @param  mixed  $value
     * @return int|false
     */
    public function lrem($key, $count, $value)
    {
        return $this->command('lrem', [$key, $value, $count]);
    }

    /**
     * Removes and returns the first element of the list stored at key.
     *
     * @param  mixed  ...$arguments
     * @return array|null
     */
    public function blpop(...$arguments)
    {
        $result = $this->comman�ið tilSamtals punktarRekja röðRekja sjálfkrafa pöntunina þegar þú kaupir á ákveðnum svæðumVeski hjálpar til við að rekja pöntunina þínaAllt klárt! Greiðsluupplýsingarnar þínar hafa verið uppfærðarEkki er hægt að uppfæra heimilisfang kortsins. Gakktu úr skugga um að upplýsingarnar séu réttar og reyndu aftur.Til að uppfæra þetta kort skaltu færa inn CVV-öryggiskóðann sem tengist $1 sem endar á $2.Allt klárt! Gælunafnið þitt hefur verið uppfært.Allt klárt! Sýndarkortið þitt hefur verið uppfærtUppfærir greiðsluupplýsingar…Uppfærir sýndarkort…Notaðu þetta sýndarkort þegar þú kaupir í Microsoft Edge.Sannvotta og skráÞegar þú verslar á netinu getur Edge skipt út kortanúmerinu þínu fyrir sýndarkortanúmer. Ef kemur upp gagnabrot hjá söluaðilanum getur þetta hjálpað til við að verja réttar kortaupplýsingar þínar. Kortaútgefandinn gæti sent þér staðfestingarkóða.Viltu skrá þig út á öruggan hátt með sýndarkorti?Skoða ferilFerill sýndarkortsUppfæra núnaUppfærsla er í boði fyrir Veski. Uppfærðu þessa síðu til að nota nýjustu útgáfuna.PöntunarrakningVar þessi eiginleiki gagnlegur innkaupaupplifunni þinni?Frekari upplýsingar um hvernig virkar að kaupa núna og greiða síðarMicrosoft rukkar þig ekki eða fær greitt frá þessum þjónustuaðila fyrir þessa færslu $1. Ef þú heldur áfram samþykkir þú $2 og staðfestir að heilarkaupupphæð verði deilt með völdum þjónustuaðila í samræmi við $3.Áætluð gjöldFyrsta greiðslaÞetta er áætlaður gjalddagi fyrstu greiðslu. Raunveruleg dagsetning kann að vera breytileg eftir því hvenær söluaðilinn vinnur úr kaupunum.Stjórna valkostum sjálfvirkrar útfyllingarFj. greiðslna$1 er ekki í boði fyrir þessi kaupAðeins kaup á milli $1-$2 eru gjaldgengSláðu inn upplýsingarnar þínar og veldu þjónustuaðilaVeldu valkost:Pöntun samtals, með sköttum og sendingarkostnaði:Sláðu inn upphæðFærðu inn heildarupphæð pöntunar með sköttum og sendingarkostnaðiSýndarkort tilbúiðEkki er hægt að sækja upplýsingar um sýndarkort. Farðu á $1 til að fá upplýsingar um sýndarkortið.Æ, æ…Farðu á $1Takk fyrir að senda okkur athugasemdir.Ef Affirm hefur nýlega samþykkt færslu frá þér gætu greiðsluskilmálar samþykktarinnar átt við.Microsoft hvorki rukkar þig né fær greitt frá þessum þjónustuaðilum.Kaupum verður skipt niður á 4 afborganirbreyta stillingunumGreiða yfir tímabilÞetta vefsvæði styður ekki sýndarkortSýndarkortanúmer •••• $1 virkjað til að vernda greiðsluupplýsingarnar þínarSkipta greiðslum yfir 8 vikurEngin vaxtagjöld,vanskilagjöld kunna að eiga viðSkipta greiðslum yfir 6 vikurGreiða með kortiGreiða með korti eða greiða með tímanumnota sparnaðEngin vanskilagjöld, engir vextirEngin áhrif á lánshæfi, vanskilagjöld kunna að eiga viðVeski prófaði alla afsláttarmiða en fann engan sparnaðVeski prófaði alla tiltæka afsláttarmiðaÞú sparar $1Fáðu allt að $1 eða $2Allt að $1Nota sparnaðVirkja Microsoft-endurgreiðsluVirkja Microsoft-endurgreiðslu og nota afsláttarmiða sjálfkrafa$1 til að spara tíma og peninga þegar þú verslir á netinu.Notaðu afsláttarmiða sjálfkrafaVirkja verslun í Microsoft EdgeMeðaltals sparnaður: $1 á $2Veski mun finna besta tilboðið fyrir þigPrófun verður gerð á $1Þú færð allt að $1 endurgreitt.Þú sparar $1 og færð allt að $2 endurgreitt.Fylla út greiðslumáta sjálfkrafaÚps! Ekki er hægt að fylla sjálfkrafa út greiðsluupplýsingarnar eins og er. Engar áhyggjur – þú getur samt fyllt þær út handvirkt.Við fylltum sjálfkrafa út greiðsluupplýsingarnar til að ljúka kaupum á fljótlegan hátt.Sleppa afsláttarmiðum45% notendur spöruðu peninga með afsláttarmiðum.Hætt við notkun afsláttarmiðaVirkja endurgreiðsluSjá upplýsingar um tilboð á $1Endurgreiðslur og afsláttarmiðarÞví miður geturðu ekki virkjað endurgreiðsluáætlun að þessu sinni.Virkja endurgreiðsluáætlun að þessu sinniÞú færð uppfærslur í tölvupósti og fylgist með upplýsingum um endurgreiðslur á $1.Nota sparnað og halda áframMeð því að halda áfram virkjum við endurgreiðsluáætlunina, notum afsláttarmiða sjálfkrafa og fyllum út sendingar- og greiðsluupplýsingarnar þínar.Með því að halda áfram virkjum við endurgreiðsluáætlunina, notum afsláttarmiða sjálfkrafa og fyllum sjálfkrafa út sendinguna þína og förum með þig á $1Með því að halda áfram virkjum við endurgreiðsluáætlunina og fyllum út sendingar- og greiðsluupplýsingarnar þínar.Með því að halda áfram virkjum við endurgreiðsluáætlunina og fyllum sjálfkrafa út sendinguna þína og förum með þig á $1Með því að halda áfram virkjum við endurgreiðsluáætlunina og notum afsláttarmiða sjálfkrafa.Með því að halda áfram virkjum við endurgreiðsluáætlunina.Ég heimila að sett sé upphæð $1 í tækið mitt til að auðvelda greiðslu með þjónustuaðila afsláttarmiðans samkvæmt $2Sparað að meðaltali $1Njóttu þess sem eftir er af verslunarferðinni.Þú getur fengið allt að $1 endurgreiðslu á $2virkjaðu endurgreiðsluforritiðnotaðu afsláttarmiða sjálfkrafafylltu sjálfkrafa út sendingarupplýsingar þínarfylltu út sendingar- og reikningsupplýsingarfylltu út reikningsupplýsingarinnleystu gjafakortfara með þig í $1Með því að halda áfram munum við $1, $2, $3, $4 og $5.Með því að halda áfram munum við $1, $2, $3 og $4.Með því að halda áfram munum við $1.Með því að halda áfram munum við $1, $2 og $3.Með því að halda áfram munum við $1 og $2.Upplýsingar um sendinguEkkert vistað heimilisfangEkkert vistað heitiVið höfum notað besta sparnaðinn fyrir þig og komumst að því að þú getur aðeins notað einn fyrir þessi kaup. Veldu einn af eftirfarandi til að halda áfram.Veldu einn til að halda áframFáðu $1 Rewards-punkta fyrir kaup með veski fyrir 30. júní.Þú færð $1 stig fyrir þessa greiðslu.Nota sparnað og fylla út upplýsingar$1 til að virkja endurgreiðslu og nota afsláttarmiða sjálfkrafa. Þetta getur sparað þér tíma og peninga þegar þú verslar í Edge.Þú ert að nota endurgreiðslu og afsláttarmiða Microsoft-verslunar.Kveiktu á til að virkja sjálfvirka útfyllinguVið erum að tengjast bankanum þínum til að búa til kortaupplýsingar fyrir þessa færslu. Þetta getur tekið nokkrar sekúndur.Ekki er hægt að búa til sýndarkortsupplýsingar, reyndu aftur eða veldu annað kort.Fáðu aðgang að og stjórnaðu á öruggan hátt greiðslumátum, Microsoft Rewards og fleiru með Veski í Microsoft Edge.Við kynnum veskið þittVertu skipulögð/skipulagður og við stjórnvölinn.Stjórnaðu aðildunum þínum í veskinuKortið þitt rennur út fljótlegaSýndarkort eru einnota greiðsluskilríki sem eru búin til af handahófi í hvert sinn sem þú kaupir á netinu. Þetta tryggir að $1 þitt sé verndað.Verndaðu kortaupplýsingarnar þínarSettu upp sýndarkort til að stunda netverslun á öruggari og þægilegri hátt.Setja upp fyrir $1Verndaðu kaupin með sýndarkortumSkoða Web3 á öruggan hátt með þessu veski án vörsluaðilaSetja upp Crypto-veskiðHunsa varanlegaÞú sérð þessa tilkynningu ekki afturSamantekt á öllum framlögum þínum er tilbúin.Bókunardagsetningin $1 frá $2 til $3 er á næsta leyti.Væntanleg gistiaðstaða$1 af $2 aðgangsorðum þínum hefur verið lekið.Leki aðgangsorðsStaða pöntunar uppfærðValið $1 Microsoft-endurgreiðslutilboð rennur út eftir $2Vista kortiðVista kortið á Microsoft-reikningTilkynning frestað í 7 dagaTilkynning blunduð í $1 dagaVeski hjálpar þér að fylgjast með pöntuninni þegar þú kaupir frá ákveðnum vefsvæðum.Fylgstu með pöntuninniKort var uppfært!Uppfæra eða fjarlægja kortUppfærsla tókst ekki. Reyndu aftur eftir $1Breyttu kortaupplýsingum til að halda áfram að nota kortið sem endar á $1.Uppfærðu kortið þitt sem endar á $1 til að halda áfram að nota það.Prófaðu nýju stjórnunarupplifunina í Veski.Stjórnaðu aðgangsorðunum þínum í veskinuSafnaðu þér inn $1 endurgreiðslu með $2.Tilboðið rennur útBæta við nýrri aðildSafnaðu allt að 20 fríðindapunktum með því að bæta nýjum aðildum við veskiðBættu við aðildum til að safna Microsoft RewardsNotkunarskilmálar Microsoft EdgeKeyptu núna, greiddu yfir tímabil með Affirm. $1Hafa samband við AffirmAffirm-kortið er sýndarkort með takmarkaða notkun og er fjármagnað af annaðhvort Cross River Bank, FDIC-meðlimi eða Affirm Loan Services, LLC, eftir því hverjir skilmálar lánasamningsins eru, og gefið út af Sutton Bank, FDIC-meðlimi, með starfsleyfi frá Visa U.S.A. Inc. Affirm-kortið er gefið út af Marqeta. $1 ef þú hefur einhverjar spurningar.Engin síðbúin gjöld eiga viðKaupa núna, borga yfirvinnu með AffirmMeð því að halda áfram samþykkirðu $1 og staðfestir að heildarupphæð þinni ásamt því hvar þú verslar verður deilt með Affirm í samræmi við $2.Skráðu þig inn í netbankaforritið til að fá staðfestingarkóða.Hringdu í bankann í $1 til að fá staðfestingarkóða.Bankinn er að senda þér staðfestingarkóða á netfangið $1.Sláðu inn kóðann sem þú fékkst frá bankanum hér fyrir neðan.Bankinn mun hringja í farsímanúmerið $1 með staðfestingarkóða.Bankinn er að senda þér staðfestingarkóða í farsímanúmerið $1.Athugaðu hvort þú hafir rétt á að greiða yfirvinnuSjálfvirk útfylling virkaði ekkiTók of mikinn tímaVerslaðu núna, greiddu í 4 afborgunum með Klarna. $1Viðskiptakortið Klarna Visa® er gefið út af Sutton Bank, FDIC-meðlimi, með starfsleyfi frá Visa U.S.A Inc. Klarna-kortið er knúið af Marqeta. Notendaþjónusta $1Klarna-þjónusta og vanskilagjöld kunna að eiga viðKlarna greiddu síðar í $1Sparaðu peninga með Klarna.Með því að halda áfram samþykkirðu $1 og staðfestir að heildarupphæð þinni ásamt því hvar þú versla