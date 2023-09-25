eAttribute("variant"),this._variant=""),this.requestUpdate("variant",M)}get variant(){return this._variant}renderIcon(O){switch(O){case"info":return j.html`
                    <sp-icon-info
                        label="Information"
                        class="type"
                    ></sp-icon-info>
                `;case"negative":case"error":case"warning":return j.html`
                    <sp-icon-alert label="Error" class="type"></sp-icon-alert>
                `;case"positive":case"success":return j.html`
                    <sp-icon-checkmark-circle
                        label="Success"
                        class="type"
                    ></sp-icon-checkmark-circle>
                `;default:return j.html``}}startCountdown(){this.countdown(),this.addEventListener("focusin",this.holdCountdown)}stopCountdown(){cancelAnimationFrame(this.nextCount),this.countdownStart=0}shouldClose(){this.dispatchEvent(new CustomEvent("close",{composed:!0,bubbles:!0,cancelable:!0}))&&this.close()}close(){this.open=!1}render(){return j.html`
            ${this.renderIcon(this.variant)}
            <div class="body" role="alert">
                <div class="content">
                    <slot></slot>
                </div>
                <slot name="action"></slot>
            </div>
            <div class="buttons">
                <sp-close-button
                    @click=${this.shouldClose}
                    label="Close"
                    variant="white"
                ></sp-close-button>
            </div>
        `}updated(O){super.updated(O),O.has("open")&&(this.open?this.timeout&&this.startCountdown():this.timeout&&this.stopCountdown()),O.has("timeout")&&(null!==this.timeout&&this.open?this.startCountdown():this.stopCountdown())}}(0,W.__decorate)([(0,N.property)({type:Boolean,reflect:!0})],n.prototype,"open",void 0),(0,W.__decorate)([(0,N.property)({type:Number})],n.prototype,"timeout",null),(0,W.__decorate)([(0,N.property)({type:String})],n.prototype,"v