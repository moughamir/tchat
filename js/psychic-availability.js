'use strict';

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var PsychicAvailability = (function () {
    function PsychicAvailability(received_parameters) {
        _classCallCheck(this, PsychicAvailability);

        this.parameters = new Map([['socketio_url', ''], ['env', 'dev'], ['website_reference', ''], ['status_selector', 'div.status'], ['psychic_selector', 'data-psychic_id'], ['available', {
            'class': 'available',
            label: 'Available'
        }], ['unavailable', {
            'class': 'unavailable',
            label: 'Unavailable'
        }], ['busy', {
            'class': 'busy',
            label: 'Busy'
        }], ['debug', true]]);

        for (var paramKey in received_parameters) {
            this.parameters.set(paramKey, received_parameters[paramKey]);
        }

        this.socket = null;

        this.loadSocketIo();
    }

    _createClass(PsychicAvailability, [{
        key: 'isUndefined',
        value: function isUndefined(o, u) {
            return o === u;
        }
    }, {
        key: 'handlingNumberValue',
        value: function handlingNumberValue(e) {
            return (typeof e == "string" || typeof e == "number") && !isNaN(e) && e !== "" ? parseFloat(e) : 0;
        }
    }, {
        key: 'callback',
        value: function callback(event) {
            var c = this.parameters.get(event);
            c();
        }
    }, {
        key: 'loadSocketIo',
        value: function loadSocketIo() {
            var psychicAvailability = this;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = psychicAvailability.parameters.get('socketio_url') + '/socket.io/socket.io.js';
            s.onload = function () {
                psychicAvailability.socket = io(psychicAvailability.parameters.get('socketio_url'));
                psychicAvailability.loadSocketListeners();
            };
            document.body.appendChild(s);
        }
    }, {
        key: 'loadSocketListeners',
        value: function loadSocketListeners() {
            var _this = this;

            var psychicAvailability = this;

            psychicAvailability.socket.on('server.ready', function () {
                // psychicAvailability.socket.emit('socket.listen', 'server.update_psychic');
            });

            // Keep it for when server have to restart
            psychicAvailability.socket.on('server.update_psychic', function (virtual_psychics) {
                var available = psychicAvailability.parameters.get('available');
                var unavailable = psychicAvailability.parameters.get('unavailable');

                var _iteratorNormalCompletion = true;
                var _didIteratorError = false;
                var _iteratorError = undefined;

                try {
                    for (var _iterator = virtual_psychics[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                        var virtual_psychic = _step.value;

                        var eVirtualPsychic = $('[' + psychicAvailability.parameters.get('psychic_selector') + '="' + virtual_psychic.reference + '"]');
                        if (eVirtualPsychic.length > 0) {
                            var _status = _this.getPsychicStatus(virtual_psychic);

                            eVirtualPsychic.find(psychicAvailability.parameters.get('status_selector')).removeClass('busy available unavailable').addClass(_status['class']).html(_status.label).trigger('availability:change');
                        }
                    }
                } catch (err) {
                    _didIteratorError = true;
                    _iteratorError = err;
                } finally {
                    try {
                        if (!_iteratorNormalCompletion && _iterator['return']) {
                            _iterator['return']();
                        }
                    } finally {
                        if (_didIteratorError) {
                            throw _iteratorError;
                        }
                    }
                }
            });

            psychicAvailability.socket.on('server.warning', function (warning) {
                console.log(warning);
            });

            psychicAvailability.socket.on('server.soft_error', function (error_key) {
                // When there is a 401, 404, 500 on server ...
                console.log(error_key);
            });
        }
    }, {
        key: 'getPsychicStatus',
        value: function getPsychicStatus(psychic) {
            if (psychic.is_available) {
                return psychic.is_busy ? this.parameters.get('busy') : this.parameters.get('available');
            } else {
                return this.parameters.get('unavailable');
            }
        }
    }]);

    return PsychicAvailability;
})();