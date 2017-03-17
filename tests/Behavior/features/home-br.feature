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
    Then I should see DDrills logo

Scenario: I want to see a search bar
    Given I am on homepage
    Then I should see the search bar

Scenario: I want to see the facets bar
    Given I am on homepage
    Then I should see the sidebar
