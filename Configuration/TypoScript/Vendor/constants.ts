# === Fluid Styled Content (fluid_styled_content) ===

[compatVersion = 7.6.0]
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:fluid_styled_content/Configuration/TypoScript/Static/constants.txt">
[global]

[compatVersion = 8.7.0]
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:fluid_styled_content/Configuration/TypoScript/constants.txt">
[global]

lib {
  fluidContent {
    layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/FluidStyledContent/

    templateRootPath = EXT:t3v_content/Resources/Private/Templates/FluidStyledContent/

    partialRootPath = EXT:t3v_content/Resources/Private/Partials/FluidStyledContent/
  }
}

# === Grid Elements (gridelements) ===

<INCLUDE_TYPOSCRIPT: source="FILE: EXT:gridelements/Configuration/TypoScript/constants.ts">