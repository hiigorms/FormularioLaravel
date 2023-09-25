crosoft Edge-də Google xidmətlərinizdən istifadə edinMicrosoft Edge Chrome ilə eyni texnologiya üzərində icra edir. İndi baxış keçirməyə başlamaq üçün Chrome verilənlərinizi gətirin.Microsoft Edge əlavə etibarla Chrome kimi eyni texnologiyanı istifadə edir. 7 gün buraya baxış keçirərək $5 dəyərində hədiyyə kartı qazanın.Microsoft Edge Chrome ilə eyni texnologiyadan istifadə edir. 7 gün ərzində bura baxaraq 6500 Microsoft Rewards xalı qazanın.Yalnız Microsoft Edge-də mövcud olan yeni Bing ilə AI-nin gücünü təcrübə edin.İndi söhbət etMicrosoft Edge haqqında ətraflı öyrəninDavam etməklə, Microsoft və tərəfdaş məhsulları haqqında təklifləri özündə ehtiva edən Microsoft Mükafatları haqqında e-poçt məktubları alacaqsınız.Davam etməklə Microsoft Edge-i standart brauzeriniz kimi təyin edəcək və Microsoft və partnyor məhsullar haqqında təkliflər daxil olmaqla Microsoft Rewards haqqında e-poçtlar alacaqsınız.Davam etməklə Microsoft Edge-i standart brauzeriniz kimi təyin edəcəksiz.Təklif qoşulduqdan sonra ilk 14 gün ərzində 1 nəfər/hesab üçün etibarlıdır.batareyaBatareya MərkəziAlət panelində batareya düyməsini göstərAlət panelindən batareya düyməsini gizlətQənaətlər: $1Qalan batareyaOrta hesabla 25 dəqiqə daha uzun müddətə gözdən keçirin və effektivlik rejimi ilə orta hesabla 27% CPU qənaət edin.Təhsil üzrə Alətlər DəstiÖyrənəninAlət dəstiTəhsil üzrə Alət dəstinə xoş gəlmişsiniz. Sizə kömək edəcək alətlərimiz varÖyrənin, İnkişaf Edin və ƏyləninƏtraflı öyrənmək üçün bunlardan birini seçinMicrosoft Edge-dəMicrosoft Edge-dəkiRiyaziyyat problemlərinizin cəld həllini tapınBununla birlikdə Edge-də daha məhsuldar olun:Microsoft 365 TəhsilRiyaziyyat həlledicisi sizə vebdən və ya PDF-dən istənilən riyaziyyat problemini çıxarmağa imkan verir, sonra sizə ani addım-addım həll üsulunu təqdim edirMicrosoft 365 sizə yaradıcılığın kilidini açmaq, komanda işini təşviq etmək və sadə, təhlükəsiz təcrübə təqdim etmək imkanı verir.Microsoft 365 haqqında ətraflı məlumat əldə edinAlət panelindəki Riyaziyyat Çalışmaları Həlledicisi düyməsini göstərPDF OxuyucusuTapşırıqlarınızı asanlıqla açın və üzərində işləyinEdge-dəki PDF oxuyucusu çəkməyinizə, düzəlişlər etməyinizə, vurğulamağınıza, qeydlər götürməyinizə və s. etməyə kömək edə biləcək zəngin redaktə alətlərini təqdim edir!Vebdə oxumağınızı təkmilləşdirinİmmersiv oxucuİmmersiv oxuyucu maneəni aradan qaldırmaqla veb-səhifənin düzümünü sadələşdirir və oxu təcrübənizi istədiyiniz şəkildə fərdiləşdirməyə kömək edir. Fokusunuzu, oxumağı anlamağınızı, qrammatikanızı və s. təkmilləşdirməyə kömək edəcək möhtəşəm alətlərə malikdir.Ucadan OxuVeb-səhifələri dinləyinUcadan oxuUcadan Oxu rejimi veb-səhifədəki mətni yüksək səslə oxuyan güclü alətdir. İstənilən səhifədə siçanın sağ düyməsinə klikləyin və menyudan Ucadan Oxu seçimini edin.Microsoft 365İstənilən veb-səhifəyə və ya vebdəki məqaləyə istinad etNövbəti sinif layihəniz üçün sitatlar yaratmaq artıq əziyyətli olmayacaq. Bu alətlə istənilən səhifənin üzərinə siçanın sağ düyməsinə klikləyə və sitatını dərhal köçürə bilərsiniz.Alət panelindəki Sitatlar düyməsini göstərTəhsil Xüsusiyyətləri Tab-vərəqələriƏvvəlki lövhəciyə köçürünSonrakı lövhəciyə köçürün$1 haqqındaBağlantınız təhlükəsizdir, lakin bu saytda problem varTəhlükəsizdir, lakin bu saytda problem var$1 saytı üçün bağlantı haqqında məlumatİzləmənin qarşısının alınması bütün saytlar üçün qeyri-aktivdir.Bütün saytlar üçün qeyri-aktiv edin$1 izləyici bloklandıBu sayt üçün izləmənin qarşısının alınması ($1)İzləmənin qarşısının alınması ($1)İzləmənin qarşısının alınması bu sayt ü�< 0 || $index >= $this->length) {
            return null;
        }

        if ($this->isMultibyte) {
            return $this->charCache[$index] ??= \mb_substr($this->line, $index, 1, 'UTF-8');
        }

        return $this->line[$index];
    }

    /**
     * Slightly-optimized version of getCurrent(null)
     */
    public function getCurrentCharacter(): ?string
    {
        if ($this->currentPosition >= $this->length) {
            return null;
        }

        if ($this->isMultibyte) {
            return $this->charCache[$this->currentPosition] ??= \mb_substr($this->line, $this->currentPosition, 1, 'UTF-8');
        }

        return $this->line[$this->currentPosition];
    }

    /**
     * Returns the next character (or null, if none) without advancing forwards
     */
    public function peek(int $offset = 1): ?string
    {
        return $this->getCharacter($this->currentPosition + $offset);
    }

    /**
     * Whether the remainder is blank
     */
    public function isBlank(): bool
    {
        return $this->nextNonSpaceCache === $this->length || $this->getNextNonSpacePosition() === $this->length;
    }

    /**
     * Move the cursor forwards
     */
    public function advance(): void
    {
        $this->advanceBy(1);
    }

    /**
     * Move the cursor forwards
     *
     * @param int  $characters       Number of characters to advance by
     * @param bool $advanceByColumns Whether to advance by columns instead of spaces
     */
    public function advanceBy(int $characters, bool $advanceByColumns = false): void
    {
        $this->previousPosition  = $this->currentPosition;
        $this->nextNonSpaceCache = null;

        if ($this->currentPosition >= $this->length || $characters === 0) {
            return;
        }

        // Optimization to avoid tab handling logic if we have no tabs
        if ($this->lastTabPosition === false || $this->currentPosition > $this->lastTabPosition) {
            $length                     = \min($characters, $this->length - $this->currentPosition);
            $this->partiallyConsumedTab = false;
            $this->currentPosition     += $length;
            $this->column              += $length;

            return;
        }

        $nextFewChars = $this->isMultibyte ?
            \mb_substr($this->line, $this->currentPosition, $characters, 'UTF-8') :
            \substr($this->line, $this->currentPosition, $characters);

        if ($characters === 1) {
            $asArray = [$nextFewChars];
        } elseif ($this->isMultibyte) {
            /** @var string[] $asArray */
            $asArray = \mb_str_split($nextFewChars, 1, 'UTF-8');
        } else {
            $asArray = \str_split($nextFewChars);
        }

        foreach ($asArray as $c) {
            if ($c === "\t") {
                $charsToTab = 4 - ($this->column % 4);
                if ($advanceByColumns) {
                    $this->partiallyConsumedTab = $charsToTab > $characters;
                    $charsToAdvance             = $charsToTab > $characters ? $characters : $charsToTab;
                    $this->column              += $charsToAdvance;
                    $this->currentPosition     += $this->partiallyConsumedTab ? 0 : 1;
                    $characters                -= $charsToAdvance;
                } else {
                    $this->partiallyConsumedTab = false;
                    $this->column              += $charsToTab;
                    $this->currentPosition++;
                    $characters--;
                }
            } else {
                $this->partiallyConsumedTab = false;
                $this->currentPosition++;
                $this->column++;
                $characters--;
            }

            if ($characters <= 0) {
                break;
            }
        }
    }

    /**
     * Advances the cursor by a single space or tab, if present
     */
    public function advanceBySpaceOrTab(): bool
    {
        $character = $this->getCurrentCharacter();

        if ($character === ' ' || $character === "\t") {
            $this->advanceBy(1, true);

            return true;
        }

        return false;
    }

    /**
     * Parse zero or more space/tab characters
     *
     * @return int Number of positions moved
     */
    public function advanceToNextNonSpaceOrTab(): int
    {
        $newPosition = $this->nextNonSpaceCache ?? $this->getNextNonSpacePosition();
        if ($newPosition === $this->currentPosition) {
            return 0;
        }

        $this->advanceBy($newPosition - $this->currentPosition);
        $this->partiallyConsumedTab = false;

        // We've just advanced to where that non-space is,
        // so any subsequent calls to find the next one will
        // always return the current position.
        $this->nextNonSpaceCache = $this->currentPosition;
        $this->indent            = 0;

        return $this->currentPosition - $this->previousPosition;
    }

    /**
     * Parse zero or more space characters, including at most one newline.
     *
     * Tab characters are not parsed with this function.
     *
     * @return int Number of positions moved
     */
    public function advanceToNextNonSpaceOrNewline(): int
    {
        $remainder = $this->getRemainder();

        // Optimization: Avoid the regex if we know there are no spaces or newlines
        if ($remainder === '' || ($remainder[0] !== ' ' && $remainder[0] !== "\n")) {
            $this->previousPosition = $this->currentPosition;

            return 0;
        }

        $matches = [];
        \preg_match('/^ *(?:\n *)?/', $remainder, $matches, \PREG_OFFSET_CAPTURE);

        // [0][0] contains the matched text
        // [0][1] contains the index of that match
        $increment = $matches[0][1] + \strlen($matches[0][0]);

        $this->advanceBy($increment);

        return $this->currentPosition - $this->previousPosition;
    }

    /**
     * Move the position to the very end of the line
     *
     * @return int The number of characters moved
     */
    public function advanceToEnd(): int
    {
        $this->previousPosition  = $this->currentPosition;
        $this->nextNonSpaceCache = null;

        $this->currentPosition = $this->length;

        return $this->currentPosition - $this->previousPosition;
    }

    public function getRemainder(): string
    {
        if ($this->currentPosition >= $this->length) {
            return '';
        }

        $prefix   = '';
        $position = $this->currentPosition;
        if ($this->partiallyConsumedTab) {
            $position++;
            $charsToTab = 4 - ($this->column % 4);
            $prefix     = \str_repeat(' ', $charsToTab);
        }

        $subString = $this->isMultibyte ?
            \mb_substr($this->line, $position, null, 'UTF-8') :
            \substr($this->line, $position);

        return $prefix . $subString;
    }

    public function getLine(): string
    {
        return $this->line;
    }

    public function isAtEnd(): bool
    {
        return $this->currentPosition >= $this->length;
    }

    /**
     * Try to match a regular expression
     *
     * Returns the matching text and advances to the end of that match
     *
     * @psalm-param non-empty-string $regex
     */
    public function match(string $regex): ?string
    {
        $subject = $this->getRemainder();

        if (! \preg_match($regex, $subject, $matches, \PREG_OFFSET_CAPTURE)) {
            return null;
        }

        // $matches[0][0] contains the matched text
        // $matches[0][1] contains the index of that match

        if ($this->isMultibyte) {
            // PREG_OFFSET_CAPTURE always returns the byte offset, not the char offset, which is annoying
            $offset      = \mb_strlen(\substr($subject, 0, $matches[0][1]), 'UTF-8');
            $matchLength = \mb_strlen($matches[0][0], 'UTF-8');
        } else {
            $offset      = $matches[0][1];
            $matchLength = \strlen($matches[0][0]);
        }

        // [0][0] contains the matched text
        // [0][1] contains the index of that match
        $this->advanceBy($offset + $matchLength);

        return $matches[0][0];
    }

    /**
     * Encapsulates the current state of this cursor in case you need to rollback later.
     *
     * WARNING: Do not parse or use the return value for ANYTHING except for
     * passing it back into restoreState(), as the number of values and their
     * contents may change in any future release without warning.
     */
    public function saveState(): CursorState
    {
        return new CursorState([
            $this->currentPosition,
            $this->previousPosition,
            $this->nextNonSpaceCache,
            $this->indent,
            $this->column,
            $this->partiallyConsumedTab,
        ]);
    }

    /**
     * Restore the cursor to a previous state.
     *
     * Pass in the value previously obtained by calling saveState().
     */
    public function restoreState(CursorState $state): void
    {
        [
            $this->currentPosition,
            $this->previousPosition,
            $this->nextNonSpaceCache,
            $this->indent,
            $this->column,
            $this->partiallyConsumedTab,
        ] = $state->toArray();
    }

    public function getPosition(): int
    {
        return $this->currentPosition;
    }

    public function getPreviousText(): string
    {
        if ($this->isMultibyte) {
            return \mb_substr($this->line, $this->previousPosition, $this->currentPosition - $this->previousPosition, 'UTF-8');
        }

        return \substr($this->line, $this->previousPosition, $this->currentPosition - $this->previousPosition);
    }

    public function getSubstring(int $start, ?int $length = null): string
    {
        if ($this->isMultibyte) {
            return \mb_substr($this->line, $start, $length, 'UTF-8');
        }

        if ($length !== null) {
            return \substr($this->line, $start, $length);
        }

        return \substr($this->line, $start);
    }

    public function getColumn(): int
    {
        return $this->column;
    }
}
