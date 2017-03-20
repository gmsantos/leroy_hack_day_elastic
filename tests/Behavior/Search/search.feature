Feature: Search products
    In order to find useful products
    As an User
    I want to be able to input type a search

Scenario: Single term
    Given I am on homepage
    When I search for "Bosch"
    Then I should see 4 Bosch drills

