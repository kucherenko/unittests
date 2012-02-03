/**
 * File contains test for InputValidator class.
 *
 * TODOLIST
 * - Create object for input element validation
 * - Check is input value is empty
 * - Check for length of value
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
        expect(typeof inputValidator).toBe('object');
    });

    it("Check is input value is empty", function(){

    });

    it("Check for length of value", function(){

    });

});