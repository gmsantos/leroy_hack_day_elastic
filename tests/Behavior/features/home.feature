Feature: Defalut elements
    In order navigate on DDrills website
    As a user
    I want to see basic elements

    Elements which I want to see:
    - Logo
    - Search input
    - Facets

Scenario: I want to see the logo
    Given I am on homepage
    Then I should see "DDrills"
    And I should see "The home of your holes"

Scenario: I want to see a search bar
    Given I am on homepage
    Then I should see a "input[name=name]" element
    And I should see a "input[type=submit][value=Search]" element

Scenario: I want to see the facets bar
    Given I am on homepage
    Then I should see "Eletric_Voltage"
    And I should see "Line"
    And I should see "Indicated_Use"
    And I should see "Power"
    And I should see "Brand"
    And I should see "RPM"
