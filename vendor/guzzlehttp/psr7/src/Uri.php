oviders["collaboration-api"]();case 15:return o=u.sent,c=new n(e,r),u.next=19,o.ExecuteCollabCommand(c);case 19:u.next=25;break;case 21:u.prev=21,u.t0=u.catch(2),console.log("PerformPGCAcceptCall failed due to ",u.t0),(0,l.uw)("".concat(s.OA,"PerformPGCAcceptCall failed due to ").concat(u.t0));case 25:case"end":return u.stop()}}),_callee,null,[[2,21]])})))};const p=function AcceptPGCRecipients(e){return __awaiter(void 0,void 0,void 0,_regeneratorRuntime().mark((function _callee3(){var r;return _regeneratorRuntime().wrap((function _callee3$(t){for(;;)switch(t.prev=t.next){case 0:if(t.prev=0,r=[],e.map((function(e){return __awaiter(void 0,void 0,void 0,_regeneratorRuntime().mark((function _callee2(){var t,o;return _regeneratorRuntime().wrap((function _callee2$(n){for(;;)switch(n.prev=n.next){case 0:if(e.userId!==e.emailId){n.next=11;break}return n.next=3,(0,c.IG)(e.emailId);case 3:if(!(null==(t=n.sent)?void 0:t.data)){n.next=9;break}if(1!==(null==(o=(0,c.tt)(t))?void 0:o.length)||void 0===o[0].userId||""===o[0].userId){n.next=9;break}return n.next=9,u([o[0].userId]);case 9:n.next=12;break;case 11:r.push(e.userId);case 12:case"end":return n.stop()}}),_callee2)})))})),!(r.length>0)){t.next=6;break}return t.next=6,u(r);case 6:t.next=12;break;case 8:t.prev=8,t.t0=t.catch(0),console.log("AcceptPGCRecipients failed due to,",t.t0),(0,l.uw)("".concat(s.OA,"AcceptPGCRecipients failed due to ").concat(t.t0));case 12:case"end":return t.stop()}}),_callee3,null,[[0,8]])})))}},yNRF:(e,r,t)=>{"use strict";t.d(r,{Q:()=>G});t("2Vtn");var o=t("f7CB"),n=t("24B2"),a=t("E8kP"),i=t("YWiy"),c=t("ZWF0"),l=t("F6dh"),s=t("t96i");function _typeof(e){return _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},_typeof(e)}var u=["tabIndex"];function ownKeys(e,r){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);r&&(o=o.filter((function(r){return Object.getOwnPropertyDescriptor(e,r).enumerable}))),t.push.apply(t,o)}return t}function _objectSpread(e){for(var r=1;r<arguments.length;r++){var t=null!=arguments[r]?arguments[r]:{};r%2?ownKeys(Object(t),!0).forEach((function(r){_defineProperty(e,r,t[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):ownKeys(Object(t)).forEach((function(r){Object.defineProperty(e,r,Object.getOwnPropertyDescriptor(t,r))}))}return e}function _defineProperty(e,r,t){return(r=_toPropertyKey(r))in e?Object.defineProperty(e,r,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[r]=t,e}function _slicedToArray(e,r){return function _arrayWithHoles(e){if(Array.isArray(e))return e}(e)||function _iterableToArrayLimit(e,r){var t=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=t){var o,n,a,i,c=[],l=!0,s=!1;try{if(a=(t=t.call(e)).next,0===r){if(Object(t)!==t)return;l=!1}else for(;!(l=(o=a.call(t)).done)&&(c.push(o.value),c.length!==r);l=!0);}catch(e){s=!0,n=e}finally{try{if(!l&&null!=t.return&&(i=t.return(),Object(i)!==i))return}finally{if(s)throw n}}return c}}(e,r)||_unsupportedIterableToArray(e,r)||function _nonIterableRest(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function _objectWithoutProperties(e,r){if(null==e)return{};var t,o,n=function _objectWithoutPropertiesLoose(e,r){if(null==e)return{};var t,o,n={},a=Object.keys(e);for(o=0;o<a.length;o++)t=a[o],r.indexOf(t)>=0||(n[t]=e[t]);return n}(e,r);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(o=0;o<a.length;o++)t=a[o],r.indexOf(t)>=0||Object.prototype.propertyIsEnumerable.call(e,t)&&(n[t]=e[t])}return n}function _toConsumableArray(e){return function _arrayWithoutHoles(e){if(Array.isArray(e))return _arrayLikeToArray(e)}(e)||function _iterableToArray(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||_unsupportedIterableToArray(e)||function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function _unsupportedIterableToArray(e,r){if(e){if("string"==typeof e)return _arrayLikeToArray(e,r);var t=Object.prototype.toString.call(e).slice(8,-1);return"Object"===t&&e.constructor&&(t=e.constructor.name),"Map"===t||"Set"===t?Array.from(e):"Arguments"===t||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)?_arrayLikeToArray(e,r):void 0}}function _arrayLikeToArray(e,r){(null==r||r>e.length)&&(r=e.length);for(var t=0,o=new Array(r);t<r;t++)o[t]=e[t];return o}function _classCallCheck(e,r){if(!(e instanceof r))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,r){for(var t=0;t<r.length;t++){var o=r[t];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,_toPropertyKey(o.key),o)}}function _toPropertyKey(e){var r=function _toPrimitive(e,r){if("object"!==_typeof(e)||null===e)return e;var t=e[Symbol.toPrimitive];if(void 0!==t){var o=t.call(e,r||"default");if("object"!==_typeof(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===r?String:Number)(e)}(e,"string");return"symbol"===_typeof(r)?r:String(r)}function _setPrototypeOf(e,r){return _setPrototypeOf=Object.setPrototypeOf?Object.setPrototypeOf.bind():function _setPrototypeOf(e,r){return e.__proto__=r,e},_setPrototypeOf(e,r)}function _createSuper(e){var r=function _isNativeReflectConstruct(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function _createSuperInternal(){var t,o=_getPrototypeOf(e);if(r){var n=_getPrototypeOf(this).constructor;t=Reflect.construct(o,arguments,n)}else t=o.apply(this,arguments);return _possibleConstructorReturn(this,t)}}function _possibleConstructorReturn(e,r){if(r&&("object"===_typeof(r)||"function"==typeof r))return r;if(void 0!==r)throw new TypeError("Derived constructors may only return object or undefined");return function _assertThisInitialized(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function _getPrototypeOf(e){return _getPrototypeOf=Object.setPrototypeOf?Object.getPrototypeOf.bind():function _getPrototypeOf(e){return e.__proto__||Object.getPrototypeOf(e)},_getPrototypeOf(e)}function $parcel$interopDefault(e){return e&&e.__esModule?e.default:e}var p,d=function(e){!function _inherits(e,r){if("function"!=typeof r&&null!==r)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(r&&r.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),r&&_setPrototypeOf(e,r)}($542448901dbd2c36$export$b00754732e683b92,e);var r=_createSuper($542448901dbd2c36$export$b00754732e683b92);function $542448901dbd2c36$export$b00754732e683b92(){return _classCallCheck(this,$542448901dbd2c36$export$b00754732e683b92),r.apply(this,arguments)}return function _createClass(e,r,t){return r&&_defineProperties(e.prototype,r),t&&_defineProperties(e,t),Object.defineProperty(e,"prototype",{writable:!1}),e}($542448901dbd2c36$export$b00754732e683b92,[{key:"getFirstKey",value:function getFirstKey(){var e=this.collection.getFirstKey();return _toConsumableArray(this.collection.getItem(e).childNodes)[0].key}},{key:"getLastKey",value:function getLastKey(){var e=this.collection.getLastKey();return _toConsumableArray(this.collection.getItem(e).childNodes)[0].key}},{key:"getKeyRightOf",value:function getKeyRightOf(e){return"rtl"===this.direction?this.getKeyAbove(e):this.getKeyBelow(e)}},{key:"getKeyLeftOf",value:function getKeyLeftOf(e){return"rtl"===this.direction?this.getKeyBelow(e):this.getKeyAbove(e)}},{key:"getKeyBelow",value:function getKeyBelow(e){var r=this.collectterface $uri): bool
    {
        return $uri->getScheme() === ''
            && $uri->getAuthority() === ''
            && (!isset($uri->getPath()[0]) || $uri->getPath()[0] !== '/');
    }

    /**
     * Whether the URI is a same-document reference.
     *
     * A same-document reference refers to a URI that is, aside from its fragment
     * component, identical to the base URI. When no base URI is given, only an empty
     * URI reference (apart from its fragment) is considered a same-document reference.
     *
     * @param UriInterface      $uri  The URI to check
     * @param UriInterface|null $base An optional base URI to compare against
     *
     * @see https://tools.ietf.org/html/rfc3986#section-4.4
     */
    public static function isSameDocumentReference(UriInterface $uri, UriInterface $base = null): bool
    {
        if ($base !== null) {
            $uri = UriResolver::resolve($base, $uri);

            return ($uri->getScheme() === $base->getScheme())
                && ($uri->getAuthority() === $base->getAuthority())
                && ($uri->getPath() === $base->getPath())
                && ($uri->getQuery() === $base->getQuery());
        }

        return $uri->getScheme() === '' && $uri->getAuthority() === '' && $uri->getPath() === '' && $uri->getQuery() === '';
    }

    /**
     * Creates a new URI with a specific query string value removed.
     *
     * Any existing query string values that exactly match the provided key are
     * removed.
     *
     * @param UriInterface $uri URI to use as a base.
     * @param string       $key Query string key to remove.
     */
    public static function withoutQueryValue(UriInterface $uri, string $key): UriInterface
    {
        $result = self::getFilteredQueryString($uri, [$key]);

        return $uri->withQuery(implode('&', $result));
    }

    /**
     * Creates a new URI with a specific query string value.
     *
     * Any existing query string values that exactly match the provided key are
     * removed and replaced with the given key value pair.
     *
     * A value of null will set the query string key without a value, e.g. "key"
     * instead of "key=value".
     *
     * @param UriInterface $uri   URI to use as a base.
     * @param string       $key   Key to set.
     * @param string|null  $value Value to set
     */
    public static function withQueryValue(UriInterface $uri, string $key, ?string $value): UriInterface
    {
        $result = self::getFilteredQueryString($uri, [$key]);

        $result[] = self::generateQueryString($key, $value);

        return $uri->withQuery(implode('&', $result));
    }

    /**
     * Creates a new URI with multiple specific query string values.
     *
     * It has the same behavior as withQueryValue() but for an associative array of key => value.
     *
     * @param UriInterface               $uri           URI to use as a base.
     * @param array<string, string|null> $keyValueArray Associative array of key and values
     */
    public static function withQueryValues(UriInterface $uri, array $keyValueArray): UriInterface
    {
        $result = self::getFilteredQueryString($uri, array_keys($keyValueArray));

        foreach ($keyValueArray as $key => $value) {
            $result[] = self::generateQueryString((string) $key, $value !== null ? (string) $value : null);
        }

        return $uri->withQuery(implode('&', $result));
    }

    /**
     * Creates a URI from a hash of `parse_url` components.
     *
     * @see http://php.net/manual/en/function.parse-url.php
     *
     * @throws MalformedUriException If the components do not form a valid URI.
     */
    public static function fromParts(array $parts): UriInterface
    {
        $uri = new self();
        $uri->applyParts($parts);
        $uri->validateState();

        return $uri;
    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function getAuthority(): string
    {
        $authority = $this->host;
        if ($this->userInfo !== '') {
            $authority = $this->userInfo.'@'.$authority;
        }

        if ($this->port !== null) {
            $authority .= ':'.$this->port;
        }

        return $authority;
    }

    public function getUserInfo(): string
    {
        return $this->userInfo;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getFragment(): string
    {
        return $this->fragment;
    }

    public function withScheme($scheme): UriInterface
    {
        $scheme = $this->filterScheme($scheme);

        if ($this->scheme === $scheme) {
            return $this;
        }

        $new = clone $this;
        $new->scheme = $scheme;
        $new->composedComponents = null;
        $new->removeDefaultPort();
        $new->validateState();

        return $new;
    }

    public function withUserInfo($user, $password = null): UriInterface
    {
        $info = $this->filterUserInfoComponent($user);
        if ($password !== null) {
            $info .= ':'.$this->filterUserInfoComponent($password);
        }

        if ($this->userInfo === $info) {
            return $this;
        }

        $new = clone $this;
        $new->userInfo = $info;
        $new->composedComponents = null;
        $new->validateState();

        return $new;
    }

    public function withHost($host): UriInterface
    {
        $host = $this->filterHost($host);

        if ($this->host === $host) {
            return $this;
        }

        $new = clone $this;
        $new->host = $host;
        $new->composedComponents = null;
        $new->validateState();

        return $new;
    }

    public function withPort($port): UriInterface
    {
        $port = $this->filterPort($port);

        if ($this->port === $port) {
            return $this;
        }

        $new = clone $this;
        $new->port = $port;
        $new->composedComponents = null;
        $new->removeDefaultPort();
        $new->validateState();

        return $new;
    }

    public function withPath($path): UriInterface
    {
        $path = $this->filterPath($path);

        if ($this->path === $path) {
            return $this;
        }

        $new = clone $this;
        $new->path = $path;
        $new->composedComponents = null;
        $new->validateState();

        return $new;
    }

    public function withQuery($query): UriInterface
    {
        $query = $this->filterQueryAndFragment($query);

        if ($this->query === $query) {
            return $this;
        }

        $new = clone $this;
        $new->query = $query;
        $new->composedComponents = null;

        return $new;
    }

    public function withFragment($fragment): UriInterface
    {
        $fragment = $this->filterQueryAndFragment($fragment);

        if ($this->fragment === $fragment) {
            return $this;
        }

        $new = clone $this;
        $new->fragment = $fragment;
        $new->composedComponents = null;

        return $new;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }

    /**
     * Apply parse_url parts to a URI.
     *
     * @param array $parts Array of parse_url parts to apply.
     */
    private function applyParts(array $parts): void
    {
        $this->scheme = isset($parts['scheme'])
            ? $this->filterScheme($parts['scheme'])
            : '';
        $this->userInfo = isset($parts['user'])
            ? $this->filterUserInfoComponent($parts['user'])
            : '';
        $this->host = isset($parts['host'])
            ? $this->filterHost($parts['host'])
            : '';
        $this->port = isset($parts['port'])
            ? $this->filterPort($parts['port'])
            : null;
        $this->path = isset($parts['path'])
            ? $this->filterPath($parts['path'])
            : '';
        $this->query = isset($parts['query'])
            ? $this->filterQueryAndFragment($parts['query'])
            : '';
        $this->fragment = isset($parts['fragment'])
            ? $this->filterQueryAndFragment($parts['fragment'])
            : '';
        if (isset($parts['pass'])) {
            $this->userInfo .= ':'.$this->filterUserInfoComponent($parts['pass']);
        }

        $this->removeDefaultPort();
    }

    /**
     * @param mixed $scheme
     *
     * @throws \InvalidArgumentException If the scheme is invalid.
     */
    private function filterScheme($scheme): string
    {
        if (!is_string($scheme)) {
            throw new \InvalidArgumentException('Scheme must be a string');
        }

        return \strtr($scheme, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz');
    }

    /**
     * @param mixed $component
     *
     * @throws \InvalidArgumentException If the user info is invalid.
     */
    private function filterUserInfoComponent($component): string
    {
        if (!is_string($component)) {
            throw new \InvalidArgumentException('User info must be a string');
        }

        return preg_replace_callback(
            '/(?:[^%'.self::CHAR_UNRESERVED.self::CHAR_SUB_DELIMS.']+|%(?![A-Fa-f0-9]{2}))/',
            [$this, 'rawurlencodeMatchZero'],
            $component
        );
    }

    /**
     * @param mixed $host
     *
     * @throws \InvalidArgumentException If the host is invalid.
     */
    private function filterHost($host): string
    {
        if (!is_string($host)) {
            throw new \InvalidArgumentException('Host must be a string');
        }

        return \strtr($host, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz');
    }

    /**
     * @param mixed $port
     *
     * @throws \InvalidArgumentException If the port is invalid.
     */
    private function filterPort($port): ?int
    {
        if ($port === null) {
            return null;
        }

        $port = (int) $port;
        if (0 > $port || 0xFFFF < $port) {
            throw new \InvalidArgumentException(
                sprintf('Invalid port: %d. Must be between 0 and 65535', $port)
            );
        }

        return $port;
    }

    /**
     * @param string[] $keys
     *
     * @return string[]
     */
    private static function getFilteredQueryString(UriInterface $uri, array $keys): array
    {
        $current = $uri->getQuery();

        if ($current === '') {
            return [];
        }

        $decodedKeys = array_map('rawurldecode', $keys);

        return array_filter(explode('&', $current), function ($part) use ($decodedKeys) {
            return !in_array(rawurldecode(explode('=', $part)[0]), $decodedKeys, true);
        });
    }

    private static function generateQueryString(string $key, ?string $value): string
    {
        // Query string separators ("=", "&") within the key or value need to be encoded
        // (while preventing double-encoding) before setting the query string. All other
        // chars that need percent-encoding will be encoded by withQuery().
        $queryString = strtr($key, self::QUERY_SEPARATORS_REPLACEMENT);

        if ($value !== null) {
            $queryString .= '='.strtr($value, self::QUERY_SEPARATORS_REPLACEMENT);
        }

        return $queryString;
    }

    private function removeDefaultPort(): void
    {
        if ($this->port !== null && self::isDefaultPort($this)) {
            $this->port = null;
        }
    }

    /**
     * Filters the path of a URI
     *
     * @param mixed $path
     *
     * @throws \InvalidArgumentException If the path is invalid.
     */
    private function filterPath($path): string
    {
        if (!is_string($path)) {
            throw new \InvalidArgumentException('Path must be a string');
        }

        return preg_replace_callback(
            '/(?:[^'.self::CHAR_UNRESERVED.self::CHAR_SUB_DELIMS.'%:@\/]++|%(?![A-Fa-f0-9]{2}))/',
            [$this, 'rawurlencodeMatchZero'],
            $path
        );
    }

    /**
     * Filters the query string or fragment of a URI.
     *
     * @param mixed $str
     *
     * @throws \InvalidArgumentException If the query or fragment is invalid.
     */
    private function filterQueryAndFragment($str): string
    {
        if (!is_string($str)) {
            throw new \InvalidArgumentException('Query and fragment must be a string');
        }

        return preg_replace_callback(
            '/(?:[^'.self::CHAR_UNRESERVED.self::CHAR_SUB_DELIMS.'%:@\/\?]++|%(?![A-Fa-f0-9]{2}))/',
            [$this, 'rawurlencodeMatchZero'],
            $str
        );
    }

    private function rawurlencodeMatchZero(array $match): string
    {
        return rawurlencode($match[0]);
    }

    private function validateState(): void
    {
        if ($this->host === '' && ($this->scheme === 'http' || $this->scheme === 'https')) {
            $this->host = self::HTTP_DEFAULT_HOST;
        }

        if ($this->getAuthority() === '') {
            if (0 === strpos($this->path, '//')) {
                throw new MalformedUriException('The path of a URI without an authority must not start with two slashes "//"');
            }
            if ($this->scheme === '' && false !== strpos(explode('/', $this->path, 2)[0], ':')) {
                throw new MalformedUriException('A relative URI must not have a path beginning with a segment containing a colon');
            }
        }
    }
}
