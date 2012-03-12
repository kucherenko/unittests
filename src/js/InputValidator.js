/**
 * @date 03.02.12
 */

/**
 * Validator constructor
 * @param string value
 */
var InputValidator = function(value) {
    this._value = null;
    if (typeof value != 'undefined') {
        this.setValue(value);
    }
}

/**
 * Set value for validate
 * @param value
 */
InputValidator.prototype.setValue = function(value) {
    this._value = value;
}

/**
 * Get value from validator
 * @param string value
 */
InputValidator.prototype.getValue = function() {
    return this._value;
}

/**
 * Set value for validate
 * @param value
 */
InputValidator.prototype.isEmpty = function(value) {
    return Boolean(this._value);
}
