mazioa; adibidez, serie-zenbakia edo baliabidearen IDaIkusi sareari buruzko informazioa; adibidez, IP edo MAC helbideaGauzatu segurtasunarekin erlazionatutako zereginak zure erakunderako; esate baterako, gailuan gordetako ziurtagiriak eta giltzak kudeatzeaIrakurri hauei buruzko informazioa: arakatzailea, sistema eragilea, gailua, instalatutako softwarea, erregistro-balioak eta fitxategiak.Irakurri zure arakatzaileari, sistema eragileari eta gailuari buruzko informazioaGehitu urruneko aplikazioak ChromeOS abiarazleanIrakurri erantsitako gailuen informazioa eta datuakEgin diagnostiko-probak.Harpidetu ChromeOS sistema-gertaeretaraIrakurri ChromeOS informazioa eta datuakIrakurri gailuaren eta osagaien serie zenbakiak.Irakurri ChromeOS sareko informazioa.Lehendik ere baduzu luzapen horren bertsio berriago bat.Lehendik baduzu aplikazio horren bertsio berriago bat.Ezin izan da eraman luzapenaren direktorioa profilera.Ezin izan dugu aplikazioa edo luzapen hori instalatuAplikazioak "$1" eduki motarekin eman behar diraEzin izan dugu aplikazioa instalatu. Eragindako ostalaritik zerbitzatu behar daEgiaztatu IDa. "$1", espero genuen, baina IDa "$2" zenEzin dugu gehitu webgune honetako aplikaziorik, luzapenik edo erabiltzaile script-ikEgiaztatu bertsioa. "$1" espero genuen, baina bertsioa "$2" zenLuzapenak "$1" eginbidea "$2" bertsiokoa izatea behar du, baina "$3" bertsioa dago soilik instalatutaEzin izan da inportatu "$1" luzapena, ez delako modulu partekatuaEzin da instalatu "$1", ez duelako onartzen "$2" zerbitzuak$1 dendatik soilik gehi daiteke"Kiosk_only" manifestu-atributua duen aplikazioa instalatu behar da Microsoft Edge-n pantaila osoko moduanEzin izan da gehitu "$1" aplikazioa "$2" aplikazioarekin gatazkan dagoelako.Ezin izan da kargatu gaiaren $1.Luzapenak orri honetan jardun dezakenean agertzen da ikonoa.Luzapenak orri honetan jardun dezakenean agertzen da ikono hau. Erabili luzapean ikonoa hautatuta edo $1 sakatuta.Erabili luzapen hau ikono hau hautatuta.Erabili luzapen hau ikono hau hautatuta edo $1 sakatuta.Luzapen hori erabiltzeko, idatzi "$1", sakatu tabuladorea eta idatzi agindua edo bilatu.Kudeatu luzapenak Ezarpenak eta abar > Luzapenak aukera sakatuta.“$1” luzapenak zure kontua atzitu nahi duLuzapenak ordenagailu guztietan izateko, aktibatu sinkronizazioa.Berretsi sarbideaHautatu duzun karpetak kontuzko fitxategiak ditu. Ziur $1 aplikazioari karpeta irakurtzeko betiko baimena eman nahi diozula?Hautatu duzun karpetak kontuzko fitxategiak ditu. Ziur $1 aplikazioari karpetan idazteko betiko baimena eman nahi diozula?Ezin izan dugu kargatu luzapena horiEzin izan dugu kargatu hemengo luzapena:Gune hau atzitu nahi duGune hau atzitzeko baimena duEzin dira irakurri edo aldatu gunearen datuakWebguneko datuak irakurri eta alda ditzake$1 helbideko luzapen guztiak baimentzea hautatu duzu$1 helbideko luzapenik ez baimentzea hautatu duzuLuzapena sakatzen dudaneanBeti hemen: $1Luzapena sakatzen duzunean$1 webguneanLortu informazio gehiago gune-sarbideari buruzErakundeak instalatu duErakutsi tresna-barranEzkutatu tresna-barratikErakundeak erakutsi duKudeatu luzapenakIkusi sareko baimenakIkuskatu pop-up leihoaHautatu luzapen-direktorioa.Hautatu paketatu beharreko luzapenaren erroko direktorioa. Luzapenak eguneratzeko, hautatu berriro erabili beharreko gako pribatuaren fitxategia ere. Hautatu gako pribatuaren fitxategia.Gako pribatuaZehaztu erroko direktorio bat.Erroko direktorioak ez du balio.Gako pribatuaren fitxategiak ez du balio.Fitxategi hauek sortu dira:

Luzapena: $1
Gako-fitxategia: $2

Mantendu gako-fitxategia toki seguru batean. Luzapenaren bertsio berriak sortu beharko dituzu.Sortu da luzapena:

$1Jarraitu instalatzenKontuz ibiliLuzapen hau ez da konfiantzazkoa Enhanced Safe Browsing-en iritziz.Gehitu luzapenaGehitu aplikazioaGehitu gaiaEman erabilera okerren berriEman "$1" luzapenaren erabilera okerren berri"$1" luzapenak luzapen hau kendu nahi du.Onartu baimenakInstalatu luzapenaKonponketa-luzapenaKonpondu aplikazioaErakutsi xehetasunakEzkutatu xehetasunakEzin dugu osatu deskarga hori. Ez daukazu sarbiderik.LuzapePage()
    {
        if ($this->option('no-interaction') && $this->didNotRequestPage()) {
            return '/';
        }

        return $this->didNotRequestPage()
            ? $this->askForPage()
            : $this->guessPage($this->argument('page'));
    }

    /**
     * Determine if the user requested a specific page when calling the command.
     *
     * @return bool
     */
    protected function didNotRequestPage()
    {
        return $this->argument('page') === null;
    }

    /**
     * Ask the user which page they would like to open.
     *
     * @return string|null
     */
    protected function askForPage()
    {
        return $this->askForPageViaCustomStrategy() ?? $this->askForPageViaAutocomplete();
    }

    /**
     * Ask the user which page they would like to open via a custom strategy.
     *
     * @return string|null
     */
    protected function askForPageViaCustomStrategy()
    {
        try {
            $strategy = require Env::get('ARTISAN_DOCS_ASK_STRATEGY');
        } catch (Throwable) {
            return null;
        }

        if (! is_callable($strategy)) {
            return null;
        }

        return $strategy($this) ?? '/';
    }

    /**
     * Ask the user which page they would like to open using autocomplete.
     *
     * @return string|null
     */
    protected function askForPageViaAutocomplete()
    {
        $choice = suggest(
            label: 'Which page would you like to open?',
            options: fn ($value) => $this->pages()
                ->mapWithKeys(fn ($option) => [
                    Str::lower($option['title']) => $option['title'],
                ])
                ->filter(fn ($title) => str_contains(Str::lower($title), Str::lower($value)))
                ->all(),
            placeholder: 'E.g. Collections'
        );

        return $this->pages()->filter(
            fn ($page) => $page['title'] === $choice || Str::lower($page['title']) === $choice
        )->keys()->first() ?: $this->guessPage($choice);
    }

    /**
     * Guess the page the user is attempting to open.
     *
     * @return string|null
     */
    protected function guessPage($search)
    {
        return $this->pages()
            ->filter(fn ($page) => str_starts_with(
                Str::slug($page['title'], ' '),
                Str::slug($search, ' ')
            ))->keys()->first() ?? $this->pages()->map(fn ($page) => similar_text(
                Str::slug($page['title'], ' '),
                Str::slug($search, ' '),
            ))
            ->filter(fn ($score) => $score >= min(3, Str::length($search)))
            ->sortDesc()
            ->keys()
            ->sortByDesc(fn ($slug) => Str::contains(
                Str::slug($this->pages()[$slug]['title'], ' '),
                Str::slug($search, ' ')
            ) ? 1 : 0)
            ->first();
    }

    /**
     * The section the user specifically asked to open.
     *
     * @param  string  $page
     * @return string|null
     */
    protected function section($page)
    {
        return $this->didNotRequestSection()
            ? null
            : $this->guessSection($page);
    }

    /**
     * Determine if the user requested a specific section when calling the command.
     *
     * @return bool
     */
    protected function didNotRequestSection()
    {
        return $this->argument('section') === null;
    }

    /**
     * Guess the section the user is attempting to open.
     *
     * @param  string  $page
     * @return string|null
     */
    protected function guessSection($page)
    {
        return $this->sectionsFor($page)
            ->filter(fn ($section) => str_starts_with(
                Str::slug($section['title'], ' '),
                Str::slug($this->argument('section'), ' ')
            ))->keys()->first() ?? $this->sectionsFor($page)->map(fn ($section) => similar_text(
                Str::slug($section['title'], ' '),
                Str::slug($this->argument('section'), ' '),
            ))
            ->filter(fn ($score) => $score >= min(3, Str::length($this->argument('section'))))
            ->sortDesc()
            ->keys()
            ->sortByDesc(fn ($slug) => Str::contains(
                Str::slug($this->sectionsFor($page)[$slug]['title'], ' '),
                Str::slug($this->argument('section'), ' ')
            ) ? 1 : 0)
            ->first();
    }

    /**
     * Open the URL in the user's browser.
     *
     * @param  string  $url
     * @return void
     */
    protected function open($url)
    {
        ($this->urlOpener ?? function ($url) {
            if (Env::get('ARTISAN_DOCS_OPEN_STRATEGY')) {
                $this->openViaCustomStrategy($url);
            } elseif (in_array($this->systemOsFamily, ['Darwin', 'Windows', 'Linux'])) {
                $this->openViaBuiltInStrategy($url);
            } else {
                $this->components->warn('Unable to open the URL on your system. You will need to open it yourself or create a custom opener for your system.');
            }
        })($url);
    }

    /**
     * Open the URL via a custom strategy.
     *
     * @param  string  $url
     * @return void
     */
    protected function openViaCustomStrategy($url)
    {
        try {
            $command = require Env::get('ARTISAN_DOCS_OPEN_STRATEGY');
        } catch (Throwable) {
            $command = null;
        }

        if (! is_callable($command)) {
            $this->components->warn('Unable to open the URL with your custom strategy. You will need to open it yourself.');

            return;
        }

        $command($url);
    }

    /**
     * Open the URL via the built in strategy.
     *
     * @param  string  $url
     * @return void
     */
    protected function openViaBuiltInStrategy($url)
    {
        if ($this->systemOsFamily === 'Windows') {
            $process = tap(Process::fromShellCommandline(escapeshellcmd("start {$url}")))->run();

            if (! $process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }

            return;
        }

        $binary = Collection::make(match ($this->systemOsFamily) {
            'Darwin' => ['open'],
            'Linux' => ['xdg-open', 'wslview'],
        })->first(fn ($binary) => (new ExecutableFinder)->find($binary) !== null);

        if ($binary === null) {
            $this->components->warn('Unable to open the URL on your system. You will need to open it yourself or create a custom opener for your system.');

            return;
        }

        $process = tap(Process::fromShellCommandline(escapeshellcmd("{$binary} {$url}")))->run();

        if (! $process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }

    /**
     * The available sections for the page.
     *
     * @param  string  $page
     * @return \Illuminate\Support\Collection
     */
    public function sectionsFor($page)
    {
        return new Collection($this->pages()[$page]['sections']);
    }

    /**
     * The pages available to open.
     *
     * @return \Illuminate\Support\Collection
     */
    public function pages()
    {
        return new Collection($this->docs()['pages']);
    }

    /**
     * Get the documentation index as a collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function docs()
    {
        return $this->cache->remember(
            "artisan.docs.{{$this->version()}}.index",
            CarbonInterval::months(2),
            fn () => $this->fetchDocs()->throw()->collect()
        );
    }

    /**
     * Refresh the cached copy of the documentation index.
     *
     * @return void
     */
    protected function refreshDocs()
    {
        with($this->fetchDocs(), function ($response) {
            if ($response->successful()) {
                $this->cache->put("artisan.docs.{{$this->version()}}.index", $response->collect(), CarbonInterval::months(2));
            }
        });
    }

    /**
     * Fetch the documentation index from the Laravel website.
     *
     * @return \Illuminate\Http\Client\Response
     */
    protected function fetchDocs()
    {
        return $this->http->get("https://laravel.com/docs/{$this->version()}/index.json");
    }

    /**
     * Determine the version of the docs to open.
     *
     * @return string
     */
    protected function version()
    {
        return Str::before($this->version ?? $this->laravel->version(), '.').'.x';
    }

    /**
     * The search query the user provided.
     *
     * @return string
     */
    protected function searchQuery()
    {
        return Collection::make($_SERVER['argv'])->skip(3)->implode(' ');
    }

    /**
     * Determine if the command is intended to perform a search.
     *
     * @return bool
     */
    protected function isSearching()
    {
        return ($_SERVER['argv'][2] ?? null) === '--';
    }

    /**
     * Set the documentation version.
     *
     * @param  string  $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Set a custom URL opener.
     *
     * @param  callable|null  $opener
     * @return $this
     */
    public function setUrlOpener($opener)
    {
        $this->urlOpener = $opener;

        return $this;
    }

    /**
     * Set the system operating system family.
     *
     * @param  string  $family
     * @return $this
     */
    public function setSystemOsFamily($family)
    {
        $this->systemOsFamily = $family;

        return $this;
    }
}
