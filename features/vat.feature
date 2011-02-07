Feature: VatCalculation
    In order to communicate to the client
    As an operator
    I want to manage value added tax

    Scenario: Calculate VAT
        Given I have entered 100 into the unit price
        And   I have entered 20 into the vat percentage
        When  I make a behavior request
        Then  The gross price should be 120
