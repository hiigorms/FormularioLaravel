pakotangaNgā TautuhingaArā |0| o ngā takahanga hōu. Pāwhiritia te tāmata hei tiro i aua mea.Haere ki |Ngā tautuhinga tātaritanga me urupare| kia tirohia te raraunga tātaritanga.Kua tuwhera kē tēnei whārangi i a koe.Kua kore anō e wātea.|0| ngā takahanga kua kitea.Kāore pea e whakaaturia inamatatia ngā takahanga. Tirohia anō taro ake nei.Haere ki |ngā tautuhinga| me tuku raraunga mō tō whakamahi i te pūtirotiro.Tātaritanga ingoa takahangaTāmata rārangi takahangaKōwhiri kōwhiringa kāwai takahangaTātari kāwai takahangaTiro takahangaNgā kāwai takahangaTakahanga tino raraungaNgā Tautuhinga me ētahi atuMicrosoft Edge TawhitoKāore te Microsoft Edge i te urupare nā te mea kei te whakahaere tētahi tauira tīari me ngā mana whakarewa. Kei te hiahia koe ki te tīmata anō i te tauira tīariari me ngā mana pūnoa?Tautuhia a Microsoft Edge hei taupānga taunoa mō te pānui kōnae PDF?Ko Microsoft Edge tō pūpānui PDF taunoa ināianei.Kāore i taea a Microsoft Edge te tautuhi hei pūpānui PDF taunoa.Microsoft Edge WebView2 RuntimeKua tāuta kē te Microsoft Edge WebView2 Runtime ki tō rorohiko mō ngā kaiwhakamahi katoa.Me tino wetetāuta rānei te Microsoft Edge WebView2 Runtime?Wetetāuta te Microsoft Edge WebView2 RuntimeNgā Paeutauta i te mataKua huna Ngā PaeutautaWehe ana i te mata katoaKei te moe tēnei ripa hei tiaki rauemi.$1 - Moe anaNgā penapena whakatau tata: $1%I turakina tēnei ripa hei tiaki rauemi.$1 - I ākiritiaNgā mea hōuMe tino mōhio mātou kua whakaaetia koe kia wehe i te Aratau Tamariki. Tono kia tāuru he pakeke i tāna kupuhipa rorohiko.Me tino mōhio mātou kua whakaaetia koe kia uru ki ētahi atu paetukutuku i te Aratau Tamariki. Tono kia tāuru he pakeke i tāna kupuhipa rorohiko.Ngā TureTūmataitingaKa mana mō te tangata/pūkete 1 i ngā rā 14 tīmata o te whakauru ki Microsoft Rewards.Ki te rēhita mō Microsoft Rewards, me whai i tētahi pūkete Microsoft. Ka takiurungia koe ki Microsoft Edge e tārua ai i ō raraunga tirotiro me te tuku i a koe kia tirohia ō kupuhipa, hītori me te maha atu ki ō pūrere katoaTinakuKaua e whakaatuKaua e whakaatu tūtohutanga mō te roanga ake o tētahi wikiKaua e tūtohu i tēnei āhuatangaNgā Tautuhinga Whakamōhiotanga99+TopengamataHuna-aunoa i te paetahaWhakaatu i ngā wā katoa i te paetahaI tāpiritia te hoahoa ki te whakairingaTirohia ngā raraunga kawemaiNgana anōKua mauKāore inaianeiPine ki te paetaumahiKei konei ō raraunga!Kāore e taea te kawemai i ōu raraungaKua oti pai te kawemai ngā makau, ngā kupuhipa me ētahi atu raraunga mai i tō pūkete Google.Kua kawe tikahia mai ngā makau me ētahi atu raraunga tirotiro mai i tō pūkete Google. Engari kāore i taea e mātou ō kupuhipa te kawemai. Me ngana anō ki te kawemai kupuhipa mai i te $1.Kawemai raraunga pūtirotiroKua tutuki pai te kawemai kupuhipa mai i tō pūkete Google, engari kāore i taea te kawemai i ētahi atu raraunga tirotiro. Me ngana anō ki te kawemai mai i te $1.Kāore i taea e mātou te kawe mai i ngā raraunga tirotiro mai i tō pūkete Google. Ka taea e koe te tirotiro tonu, te ngana anō rānei ki te kawemai i te raraunga tirotiro.Ka hiahiatia he hohengaI mua i te haere tonu te kawemai i ō raraunga tirotiro ki Microsoft Edge, ka hiahia a Google kia manatoko koe i ō mōhiohio pūkete.Kei konei ō raraunga! Uru tere ki ngā pae makau mā te pine i ēnā ki te paetaumahi.Kua huakina e mātou tā kōnae mō te tirohanga tere me te tirohanga māmā ki a Microsoft Edge nei. Kōwhiri Tikiake kōnae mēnā hiahia koe ki te whakamahi ia ā muri ake.Kua huakina e mātou tā kōnae kia tere ai, māmāi hoki te tirohanga. Kōwhiri Tikiake kōnae mēnā hiahia ana koe ki te whakamahi i a tēnā ā muri ake.Tē taea te whakatuwhera te kōnae hei tirohanga, E tikiake ana te kōnae kē.Kei te whakamotuhēhē…Taihoa ake nei ina manatoko ai a Microsoft Edge i tōutuakiri…Kua oti te motuhēhēnga.E ngana ana a Microsoft Edge ki te whakakī kupuhipa. Patohia tō kupuhipa Windows hei whakaae ki tēnei.I mua i tō whakahōu i ō tautuhinga whak bool  $ignoreCase
     * @return bool
     */
    public function contains($needles, $ignoreCase = false)
    {
        return Str::contains($this->value, $needles, $ignoreCase);
    }

    /**
     * Determine if a given string contains all array values.
     *
     * @param  iterable<string>  $needles
     * @param  bool  $ignoreCase
     * @return bool
     */
    public function containsAll($needles, $ignoreCase = false)
    {
        return Str::containsAll($this->value, $needles, $ignoreCase);
    }

    /**
     * Get the parent directory's path.
     *
     * @param  int  $levels
     * @return static
     */
    public function dirname($levels = 1)
    {
        return new static(dirname($this->value, $levels));
    }

    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @return bool
     */
    public function endsWith($needles)
    {
        return Str::endsWith($this->value, $needles);
    }

    /**
     * Determine if the string is an exact match with the given value.
     *
     * @param  \Illuminate\Support\Stringable|string  $value
     * @return bool
     */
    public function exactly($value)
    {
        if ($value instanceof Stringable) {
            $value = $value->toString();
        }

        return $this->value === $value;
    }

    /**
     * Extracts an excerpt from text that matches the first instance of a phrase.
     *
     * @param  string  $phrase
     * @param  array  $options
     * @return string|null
     */
    public function excerpt($phrase = '', $options = [])
    {
        return Str::excerpt($this->value, $phrase, $options);
    }

    /**
     * Explode the string into an array.
     *
     * @param  string  $delimiter
     * @param  int  $limit
     * @return \Illuminate\Support\Collection<int, string>
     */
    public function explode($delimiter, $limit = PHP_INT_MAX)
    {
        return collect(explode($delimiter, $this->value, $limit));
    }

    /**
     * Split a string using a regular expression or by length.
     *
     * @param  string|int  $pattern
     * @param  int  $limit
     * @param  int  $flags
     * @return \Illuminate\Support\Collection<int, string>
     */
    public function split($pattern, $limit = -1, $flags = 0)
    {
        if (filter_var($pattern, FILTER_VALIDATE_INT) !== false) {
            return collect(mb_str_split($this->value, $pattern));
        }

        $segments = preg_split($pattern, $this->value, $limit, $flags);

        return ! empty($segments) ? collect($segments) : collect();
    }

    /**
     * Cap a string with a single instance of a given value.
     *
     * @param  string  $cap
     * @return static
     */
    public function finish($cap)
    {
        return new static(Str::finish($this->value, $cap));
    }

    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string|iterable<string>  $pattern
     * @return bool
     */
    public function is($pattern)
    {
        return Str::is($pattern, $this->value);
    }

    /**
     * Determine if a given string is 7 bit ASCII.
     *
     * @return bool
     */
    public function isAscii()
    {
        return Str::isAscii($this->value);
    }

    /**
     * Determine if a given string is valid JSON.
     *
     * @return bool
     */
    public function isJson()
    {
        return Str::isJson($this->value);
    }

    /**
     * Determine if a given value is a valid URL.
     *
     * @return bool
     */
    public function isUrl()
    {
        return Str::isUrl($this->value);
    }

    /**
     * Determine if a given string is a valid UUID.
     *
     * @return bool
     */
    public function isUuid()
    {
        return Str::isUuid($this->value);
    }

    /**
     * Determine if a given string is a valid ULID.
     *
     * @return bool
     */
    public function isUlid()
    {
        return Str::isUlid($this->value);
    }

    /**
     * Determine if the given string is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->value === '';
    }

    /**
     * Determine if the given string is not empty.
     *
     * @return bool
     */
    public function isNotEmpty()
    {
        return ! $this->isEmpty();
    }

    /**
     * Convert a string to kebab case.
     *
     * @return static
     */
    public function kebab()
    {
        return new static(Str::kebab($this->value));
    }

    /**
     * Return the length of the given string.
     *
     * @param  string|null  $encoding
     * @return int
     */
    public function length($encoding = null)
    {
        return Str::length($this->value, $encoding);
    }

    /**
     * Limit the number of characters in a string.
     *
     * @param  int  $limit
     * @param  string  $end
     * @return static
     */
    public function limit($limit = 100, $end = '...')
    {
        return new static(Str::limit($this->value, $limit, $end));
    }

    /**
     * Convert the given string to lower-case.
     *
     * @return static
     */
    public function lower()
    {
        return new static(Str::lower($this->value));
    }

    /**
     * Convert GitHub flavored Markdown into HTML.
     *
     * @param  array  $options
     * @return static
     */
    public function markdown(array $options = [])
    {
        return new static(Str::markdown($this->value, $options));
    }

    /**
     * Convert inline Markdown into HTML.
     *
     * @param  array  $options
     * @return static
     */
    public function inlineMarkdown(array $options = [])
    {
        return new static(Str::inlineMarkdown($this->value, $options));
    }

    /**
     * Masks a portion of a string with a repeated character.
     *
     * @param  string  $character
     * @param  int  $index
     * @param  int|null  $length
     * @param  string  $encoding
     * @return static
     */
    public function mask($character, $index, $length = null, $encoding = 'UTF-8')
    {
        return new static(Str::mask($this->value, $character, $index, $length, $encoding));
    }

    /**
     * Get the string matching the given pattern.
     *
     * @param  string  $pattern
     * @return static
     */
    public function match($pattern)
    {
        return new static(Str::match($pattern, $this->value));
    }

    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string|iterable<string>  $pattern
     * @return bool
     */
    public function isMatch($pattern)
    {
        return Str::isMatch($pattern, $this->value);
    }

    /**
     * Get the string matching the given pattern.
     *
     * @param  string  $pattern
     * @return \Illuminate\Support\Collection
     */
    public function matchAll($pattern)
    {
        return Str::matchAll($pattern, $this->value);
    }

    /**
     * Determine if the string matches the given pattern.
     *
     * @param  string  $pattern
     * @return bool
     */
    public function test($pattern)
    {
        return $this->isMatch($pattern);
    }

    /**
     * Pad both sides of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padBoth($length, $pad = ' ')
    {
        return new static(Str::padBoth($this->value, $length, $pad));
    }

    /**
     * Pad the left side of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padLeft($length, $pad = ' ')
    {
        return new static(Str::padLeft($this->value, $length, $pad));
    }

    /**
     * Pad the right side of the string with another.
     *
     * @param  int  $length
     * @param  string  $pad
     * @return static
     */
    public function padRight($length, $pad = ' ')
    {
        return new static(Str::padRight($this->value, $length, $pad));
    }

    /**
     * Parse a Class@method style callback into class and method.
     *
     * @param  string|null  $default
     * @return array<int, string|null>
     */
    public function parseCallback($default = null)
    {
        return Str::parseCallback($this->value, $default);
    }

    /**
     * Call the given callback and return a new string.
     *
     * @param  callable  $callback
     * @return static
     */
    public function pipe(callable $callback)
    {
        return new static($callback($this));
    }

    /**
     * Get the plural form of an English word.
     *
     * @param  int|array|\Countable  $count
     * @return static
     */
    public function plural($count = 2)
    {
        return new static(Str::plural($this->value, $count));
    }

    /**
     * Pluralize the last word of an English, studly caps case string.
     *
     * @param  int|array|\Countable  $count
     * @return static
     */
    public function pluralStudly($count = 2)
    {
        return new static(Str::pluralStudly($this->value, $count));
    }

    /**
     * Find the multi-byte safe position of the first occurrence of the given substring.
     *
     * @param  string  $needle
     * @param  int  $offset
     * @param  string|null  $encoding
     * @return int|false
     */
    public function position($needle, $offset = 0, $encoding = null)
    {
        return Str::position($this->value, $needle, $offset, $encoding);
    }

    /**
     * Prepend the given values to the string.
     *
     * @param  string  ...$values
     * @return static
     */
    public function prepend(...$values)
    {
        return new static(implode('', $values).$this->value);
    }

    /**
     * Remove any occurrence of the given string in the subject.
     *
     * @param  string|iterable<string>  $search
     * @param  bool  $caseSensitive
     * @return static
     */
    public function remove($search, $caseSensitive = true)
    {
        return new static(Str::remove($search, $this->value, $caseSensitive));
    }

    /**
     * Reverse the string.
     *
     * @return static
     */
    public function reverse()
    {
        return new static(Str::reverse($this->value));
    }

    /**
     * Repeat the string.
     *
     * @param  int  $times
     * @return static
     */
    public function repeat(int $times)
    {
        return new static(str_repeat($this->value, $times));
    }

    /**
     * Replace the given value in the given string.
     *
     * @param  string|iterable<string>  $search
     * @param  string|iterable<string>  $replace
     * @param  bool  $caseSensitive
     * @return static
     */
    public function replace($search, $replace, $caseSensitive = true)
    {
        return new static(Str::replace($search, $replace, $this->value, $caseSensitive));
    }

    /**
     * Replace a given value in the string sequentially with an array.
     *
     * @param  string  $search
     * @param  iterable<string>  $replace
     * @return static
     */
    public function replaceArray($search, $replace)
    {
        return new static(Str::replaceArray($search, $replace, $this->value));
    }

    /**
     * Replace the first occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceFirst($search, $replace)
    {
        return new static(Str::replaceFirst($search, $replace, $this->value));
    }

    /**
     * Replace the first occurrence of the given value if it appears at the start of the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceStart($search, $replace)
    {
        return new static(Str::replaceStart($search, $replace, $this->value));
    }

    /**
     * Replace the last occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceLast($search, $replace)
    {
        return new static(Str::replaceLast($search, $replace, $this->value));
    }

    /**
     * Replace the last occurrence of a given value if it appears at the end of the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @return static
     */
    public function replaceEnd($search, $replace)
    {
        return new static(Str::replaceEnd($search, $replace, $this->value));
    }

    /**
     * Replace the patterns matching the given regular expression.
     *
     * @param  string  $pattern
     * @param  \Closure|string  $replace
     * @param  int  $limit
     * @return static
     */
    public function replaceMatches($pattern, $replace, $limit = -1)
    {
        if ($replace instanceof Closure) {
            return new static(preg_replace_callback($pattern, $replace, $this->value, $limit));
        }

        return new static(preg_replace($pattern, $replace, $this->value, $limit));
    }

    /**
     * Parse input from a string to a collection, according to a format.
     *
     * @param  string  $format
     * @return \Illuminate\Support\Collection
     */
    public function scan($format)
    {
        return collect(sscanf($this->value, $format));
    }

    /**
     * Remove all "extra" blank space from the given string.
     *
     * @return static
     */
    public function squish()
    {
        return new static(Str::squish($this->value));
    }

    /**
     * Begin a string with a single instance of a given value.
     *
     * @param  string  $prefix
     * @return static
     */
    public function start($prefix)
    {
        return new static(Str::start($this->value, $prefix));
    }

    /**
     * Strip HTML and PHP tags from the given string.
     *
     * @param  string  $allowedTags
     * @return static
     */
    public function stripTags($allowedTags = null)
    {
        return new static(strip_tags($this->value, $allowedTags));
    }

    /**
     * Convert the given string to upper-case.
     *
     * @return static
     */
    public function upper()
    {
        return new static(Str::upper($this->value));
    }

    /**
     * Convert the given string to title case.
     *
     * @return static
     */
    public function title()
    {
        return new static(Str::title($this->value));
    }

    /**
     * Convert the given string to title case for each word.
     *
     * @return static
     */
    public function headline()
    {
        return new static(Str::headline($this->value));
    }

    /**
     * Get the singular form of an English word.
     *
     * @return static
     */
    public function singular()
    {
        return new static(Str::singular($this->value));
    }

    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $separator
     * @param  string|null  $language
     * @param  array<string, string>  $dictionary
     * @return static
     */
    public function slug($separator = '-', $language = 'en', $dictionary = ['@' => 'at'])
    {
        return new static(Str::slug($this->value, $separator, $language, $dictionary));
    }

    /**
     * Convert a string to snake case.
     *
     * @param  string  $delimiter
     * @return static
     */
    public function snake($delimiter = '_')
    {
        return new static(Str::snake($this->value, $delimiter));
    }

    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @return bool
     */
    public function startsWith($needles)
    {
        return Str::startsWith($this->value, $needles);
    }

    /**
     * Convert a value to studly caps case.
     *
     * @return static
     */
    public function studly()
    {
        return new static(Str::studly($this->value));
    }

    /**
     * Returns the portion of the string specified by the start and length parameters.
     *
     * @param  int  $start
     * @param  int|null  $length
     * @param  string  $encoding
     * @return static
     */
    public function substr($start, $length = null, $encoding = 'UTF-8')
    {
        return new static(Str::substr($this->value, $start, $length, $encoding));
    }

    /**
     * Returns the number of substring occurrences.
     *
     * @param  string  $needle
     * @param  int  $offset
     * @param  int|null  $length
     * @return int
     */
    public function substrCount($needle, $offset = 0, $length = null)
    {
        return Str::substrCount($this->value, $needle, $offset, $length);
    }

    /**
     * Replace text within a portion of a string.
     *
     * @param  string|string[]  $replace
     * @param  int|int[]  $offset
     * @param  int|int[]|null  $length
     * @return static
     */
    public function substrReplace($replace, $offset = 0, $length = null)
    {
        return new static(Str::substrReplace($this->value, $replace, $offset, $length));
    }

    /**
     * Swap multiple keywords in a string with other keywords.
     *
     * @param  array  $map
     * @return static
     */
    public function swap(array $map)
    {
        return new static(strtr($this->value, $map));
    }

    /**
     * Trim the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function trim($characters = null)
    {
        return new static(trim(...array_merge([$this->value], func_get_args())));
    }

    /**
     * Left trim the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function ltrim($characters = null)
    {
        return new static(ltrim(...array_merge([$this->value], func_get_args())));
    }

    /**
     * Right trim the string of the given characters.
     *
     * @param  string  $characters
     * @return static
     */
    public function rtrim($characters = null)
    {
        return new static(rtrim(...array_merge([$this->value], func_get_args())));
    }

    /**
     * Make a string's first character lowercase.
     *
     * @return static
     */
    public function lcfirst()
    {
        return new static(Str::lcfirst($this->value));
    }

    /**
     * Make a string's first character uppercase.
     *
     * @return static
     */
    public function ucfirst()
    {
        return new static(Str::ucfirst($this->value));
    }

    /**
     * Split a string by uppercase characters.
     *
     * @return \Illuminate\Support\Collection<int, string>
     */
    public function ucsplit()
    {
        return collect(Str::ucsplit($this->value));
    }

    /**
     * Execute the given callback if the string contains a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenContains($needles, $callback, $default = null)
    {
        return $this->when($this->contains($needles), $callback, $default);
    }

    /**
     * Execute the given callback if the string contains all array values.
     *
     * @param  iterable<string>  $needles
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenContainsAll(array $needles, $callback, $default = null)
    {
        return $this->when($this->containsAll($needles), $callback, $default);
    }

    /**
     * Execute the given callback if the string is empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenEmpty($callback, $default = null)
    {
        return $this->when($this->isEmpty(), $callback, $default);
    }

    /**
     * Execute the given callback if the string is not empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenNotEmpty($callback, $default = null)
    {
        return $this->when($this->isNotEmpty(), $callback, $default);
    }

    /**
     * Execute the given callback if the string ends with a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenEndsWith($needles, $callback, $default = null)
    {
        return $this->when($this->endsWith($needles), $callback, $default);
    }

    /**
     * Execute the given callback if the string is an exact match with the given value.
     *
     * @param  string  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenExactly($value, $callback, $default = null)
    {
        return $this->when($this->exactly($value), $callback, $default);
    }

    /**
     * Execute the given callback if the string is not an exact match with the given value.
     *
     * @param  string  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenNotExactly($value, $callback, $default = null)
    {
        return $this->when(! $this->exactly($value), $callback, $default);
    }

    /**
     * Execute the given callback if the string matches a given pattern.
     *
     * @param  string|iterable<string>  $pattern
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenIs($pattern, $callback, $default = null)
    {
        return $this->when($this->is($pattern), $callback, $default);
    }

    /**
     * Execute the given callback if the string is 7 bit ASCII.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenIsAscii($callback, $default = null)
    {
        return $this->when($this->isAscii(), $callback, $default);
    }

    /**
     * Execute the given callback if the string is a valid UUID.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenIsUuid($callback, $default = null)
    {
        return $this->when($this->isUuid(), $callback, $default);
    }

    /**
     * Execute the given callback if the string is a valid ULID.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenIsUlid($callback, $default = null)
    {
        return $this->when($this->isUlid(), $callback, $default);
    }

    /**
     * Execute the given callback if the string starts with a given substring.
     *
     * @param  string|iterable<string>  $needles
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenStartsWith($needles, $callback, $default = null)
    {
        return $this->when($this->startsWith($needles), $callback, $default);
    }

    /**
     * Execute the given callback if the string matches the given pattern.
     *
     * @param  string  $pattern
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static
     */
    public function whenTest($pattern, $callback, $default = null)
    {
        return $this->when($this->test($pattern), $callback, $default);
    }

    /**
     * Limit the number of words in a string.
     *
     * @param  int  $words
     * @param  string  $end
     * @return static
     */
    public function words($words = 100, $end = '...')
    {
        return new static(Str::words($this->value, $words, $end));
    }

    /**
     * Get the number of words a string contains.
     *
     * @param  string|null  $characters
     * @return int
     */
    public function wordCount($characters = null)
    {
        return Str::wordCount($this->value, $characters);
    }

    /**
     * Wrap a string to a given number of characters.
     *
     * @param  int  $characters
     * @param  string  $break
     * @param  bool  $cutLongWords
     * @return static
     */
    public function wordWrap($characters = 75, $break = "\n", $cutLongWords = false)
    {
        return new static(Str::wordWrap($this->value, $characters, $break, $cutLongWords));
    }

    /**
     * Wrap the string with the given strings.
     *
     * @param  string  $before
     * @param  string|null  $after
     * @return static
     */
    public function wrap($before, $after = null)
    {
        return new static(Str::wrap($this->value, $before, $after));
    }

    /**
     * Convert the string into a `HtmlString` instance.
     *
     * @return \Illuminate\Support\HtmlString
     */
    public function toHtmlString()
    {
        return new HtmlString($this->value);
    }

    /**
     * Dump the string.
     *
     * @return $this
     */
    public function dump()
    {
        VarDumper::dump($this->value);

        return $this;
    }

    /**
     * Dump the string and end the script.
     *
     * @return never
     */
    public function dd()
    {
        $this->dump();

        exit(1);
    }

    /**
     * Get the underlying string value.
     *
     * @return string
     */
    public function value()
    {
        return $this->toString();
    }

    /**
     * Get the underlying string value.
     *
     * @return string
     */
    public function toString()
    {
        return $this->value;
    }

    /**
     * Get the underlying string value as an integer.
     *
     * @return int
     */
    public function toInteger()
    {
        return intval($this->value);
    }

    /**
     * Get the underlying string value as a float.
     *
     * @return float
     */
    public function toFloat()
    {
        return floatval($this->value);
    }

    /**
     * Get the underlying string value as a boolean.
     *
     * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
     *
     * @return bool
     */
    public function toBoolean()
    {
        return filter_var($this->value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Get the underlying string value as a Carbon instance.
     *
     * @param  string|null  $format
     * @param  string|null  $tz
     * @return \Illuminate\Support\Carbon
     *
     * @throws \Carbon\Exceptions\InvalidFormatException
     */
    public function toDate($format = null, $tz = null)
    {
        if (is_null($format)) {
            return Date::parse($this->value, $tz);
        }

        return Date::createFromFormat($format, $this->value, $tz);
    }

    /**
     * Convert the object to a string when JSON encoded.
     *
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->__toString();
    }

    /**
     * Determine if the given offset exists.
     *
     * @param  mixed  $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->value[$offset]);
    }

    /**
     * Get the value at the given offset.
     *
     * @param  mixed  $offset
     * @return string
     */
    public function offsetGet(mixed $offset): string
    {
        return $this->value[$offset];
    }

    /**
     * Set the value at the given offset.
     *
     * @param  mixed  $offset
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->value[$offset] = $value;
    }

    /**
     * Unset the value at the given offset.
     *
     * @param  mixed  $offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->value[$offset]);
    }

    /**
     * Proxy dynamic properties onto methods.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->{$key}();
    }

    /**
     * Get the raw string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}
