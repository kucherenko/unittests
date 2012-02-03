/**
 * File contains test for InputValidator class.
 *
 * @TODOLIST
 * + Create object validation object
 * - Check is value is empty
 * - Check for min/max length
 * - Check for RegExp
 *
 * @author Andrey Kucherenko
 * @date 02.02.12
 */
describe("InputValidator Test", function() {
    var inputValidator;

    beforeEach(function() {
        inputValidator = new InputValidator();
    });

    it("Create object for input element validation", function() {
        expect(typeof inputValidator).toEqual('object');
    });

    it("Check is value is empty", function(){
        expect(inputValidator.getValue()).toEqual(null);
    });

    it("Check for min/max length", function(){

    });

    it("Check for RegExp", function(){

    });

});