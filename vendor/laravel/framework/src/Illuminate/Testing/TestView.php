NodeWhakaatu Ngā PūtakeRapu $1 mō "$2"Whakatuwhera GitHubWhakatuwhera Rerenga TāpaeWhakatuwhera Taupānga Tukutuku OutlookWhakatuwhera Taupānga Tukutuku OfficeWhakatuwhera TeamsWhakatuwhera Pātaka TāhuhuWhakatuwhera Pātaka TorongaWhakaatu hītoriWaihanga ripa hōuWhakatuwhera ripa i katia inā noa neiWaihanga matapihi hōuWaihanga matapihi tirotiro InPrivate hōuTohuwāhitia tēnei ripaTohuwāhi i ngā ripa katoaTopa MaiTopa AtuTautuhia anō te topaTiro pūtake whārangiTauwāhi whārangi īmēraPae tauwāhi arotahiPaeutauta arotahiWhakaatu kaiwhakahaere tūmahiWhakaatu kaiwhakahaere tohuwāhiWhakaaturia ngā tikiakeWhakaatu tautuhingaTakahuri utauta kaiwhakawhanakeWhakatuwhera mā te Taupānga TukutukuWhakaatu Kaiwhakahaere TaupāngaWhakaatu Tahua TaupāngaRapu ripa…Ripa panukuRipa tōmuaNuku whakamua i te ripaNuku ripa whakamuriMe whakamotuhēhē i a koe me tō kupuhipa matuaKupuhipa matuaI rahua te motuhēhēnga. Ngana anō.I rahua te motuhēhēnga. Ngana anō ā muri ake.Ka tangohia tō kupuhipa matua ritenga ake i muri i tō whakamotuhēhētanga.Whakarei AtahangaHoatu Taumira Inati kia pai ake ai te māramatanga, te koitanga me te rama i roto i ngā atahanga.Taumira inatiKāore tēnei tatūnga e āhei ana i tō whakahaere ki te whakamahi mōhiohio whaiaro i runga i tō pūrere. Āwhinatia ai tō whakahaere ki te pare i ngā raraunga ā-whakahaere e urungia atu mā tēnei kōtaha.Kia tatū tāua i tō kōtaha kia urua ngā rauemi tōpūtangaWhakahaerenga TaupāngaRatonga Tiwhikete EdgePōpokoteaWhakawhanakePetaā-RotoWhakamahia ngā kupuhipaPaetaha TūkotahiI āraia aunoatia ngā whakamōhiotanga ki tēnei pae nā te nganatanga ki te whakaatu whakamōhiotanga me te kore he tauwhitinga pae.Kua āraia e mātou ngā whakamōhiotanga nā tēnei pae i te mea kāore pea e waia ana. Ki te whirinaki koe ki tēnei pae, tīpako Whakaae kia whiwhi whakamōhiotanga.Kua maukatia te ripaWhakahokia te ripa ki te whārangi maukatiWhakahokia te ripa ki te whārangi tiriTukutahi ripaIDS_SYNC_CONFIRMATION_SYNC_INFO_DESC$1 - Kua pinea, kāore anō kia tukutahitia$1 - Kua pinea, kāore anō kia pānuitia$1 - Kāore anō kia pānuitia, kāore anō kia tukutahitia$1 - Tē pānuitia$1 - Tē tukutahitiaKōwhiria tētahi atu kōwhiringaAtaata tūwhera-aunoa i roto i te pikitia-rotoTahua takahuri PhoenixKei te hiahiatia he tīmata anō7025https://microsoftedge.microsoft.com/addons?hl=mi&category=themehttps://microsoftedge.microsoft.com/addons?hl=mi81Whakaae kia uru a Microsoft Edge ki te whatunga i ō tautuhinga pātūahi,
          ārai pūmanawa kino rānei.Kua āraia tēnei whārangi e Microsoft Edge<span jscontent="settingsTitle"></span>
          >
          <span jscontent="systemTitle"></span>
          >
          <span jscontent="proxyTitle"></span>Ka pā ō huringa ina tīmataria e koe te Microsoft Edge.Kāore e wātea te pūrongo hinga i roto o Microsoft Edge.Moko EdgeE taea te mahi i tēnei pūtirotiro nā te <a target="_blank" href="$1">Chromium</a> whakatuwhera te kaupapa pūtake me ētahi atu <a target="_blank" href="$2">whakatuwhera te pūtake pūmanawa</a>.I whānau mai tēnei pūtirotiro i runga i ngā mahi a te $1 kaupapa puna tuwhera me ētahi atu $2.Kei te tiro koe i tētahi whārangi haumaru o Microsoft EdgeKua kati ohoreretia a Microsoft Edge.I kati a Microsoft Edge ina tuwhera ana ētahi o ō whārangi.Katia te Microsoft Edge ka uaki anō ki te aratau kaiwhakahaere-kore mō te mahinga pai rawa.Kati Microsoft EdgeKaua tēnei karere e whakaatu mai anō.WaeatuhiWhakahaerenga Taupānga Microsoft EdgeKua āraia te urunga taupāngaTe Tango Raraunga ā-WhakahaereKei te tangohia e tō whakahaere āna raraunga e pā ana ki a Microsoft Edge ināianei
    i te mea ko tō $1 
    kua monokia.Hei uru atu ki ō raraunga e pā ana ki te pūkete $1,
    ka hiahiatia e tō whakahaere kia whakahaeretia a Microsoft Edge e Microsoft Intune
    Ka taea tēnei pūkete te tango mai te taupānga, te whakapā rānei ki tō kaiwhakahaere IT
    mō te āwhina.Kua monokia e tō whakahaere tō pūkete$1.
    \nWhakapā atu ki tō kaiwhas
     * @param  bool  $escape
     * @return $this
     */
    public function assertSeeTextInOrder(array $values, $escape = true)
    {
        $values = $escape ? array_map('e', $values) : $values;

        PHPUnit::assertThat($values, new SeeInOrder(strip_tags($this->rendered)));

        return $this;
    }

    /**
     * Assert that the given string is not contained within the view.
     *
     * @param  string  $value
     * @param  bool  $escape
     * @return $this
     */
    public function assertDontSee($value, $escape = true)
    {
        $value = $escape ? e($value) : $value;

        PHPUnit::assertStringNotContainsString((string) $value, $this->rendered);

        return $this;
    }

    /**
     * Assert that the given string is not contained within the view text.
     *
     * @param  string  $value
     * @param  bool  $escape
     * @return $this
     */
    public function assertDontSeeText($value, $escape = true)
    {
        $value = $escape ? e($value) : $value;

        PHPUnit::assertStringNotContainsString((string) $value, strip_tags($this->rendered));

        return $this;
    }

    /**
     * Get the string contents of the rendered view.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->rendered;
    }
}
