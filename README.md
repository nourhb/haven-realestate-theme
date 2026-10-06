# Haven — Real Estate Block Theme

**Haven** is a premium WordPress block theme built for real estate agencies. Deep navy and gold design, property search hero, listing cards with beds/baths/sqft details, neighborhood guides, agent profiles, mortgage FAQ and viewing CTAs — everything a modern agency needs to sell homes online.

- **Author:** Nour El Houda Bouajila
- **Portfolio:** https://nour-el-houda-bouajila.rf.gd/
- **GitHub:** https://github.com/Nourhb
- **LinkedIn:** https://www.linkedin.com/in/nour-el-houda-bouajila
- **Version:** 1.0.0 · **License:** GPL-2.0-or-later · **Requires:** WordPress 6.4+, PHP 7.4+

## Features

- **Full Site Editing** — edit headers, footers, templates and every pixel with the block editor
- **Complete theme.json design system** — navy/gold/mist palette, Playfair Display serif + Inter sans, fluid type scale, spacing scale, card shadows
- **10 hand-built block patterns** — property search hero, featured listings, stats band, neighborhoods, agents team, client testimonials, mortgage FAQ, viewing CTA, journal cards, newsletter band
- **"Coastal" style variation** — one-click light, airy alternative (seashell backgrounds, ocean blues)
- **Property-card components** — status badges (For Sale / New / Sold), price, beds/baths/sqft rows, hover lift effects
- **Motion with manners** — scroll reveals, animated stat counters, back-to-top button; all disabled under `prefers-reduced-motion`
- **Accessibility** — skip link, visible gold focus states, semantic landmarks, keyboard-friendly navigation
- **Translation-ready** — `haven` text domain, `/languages` directory

## Installation

1. Download or clone this repository.
2. Copy the `haven-realestate-theme` folder into `wp-content/themes/` (rename the folder to `haven` if you like).
3. In WordPress, go to **Appearance → Themes** and activate **Haven**.
4. Open **Appearance → Editor** to customize templates, or insert any **Haven** pattern from the block inserter.

No plugins required. Google Fonts (Playfair Display + Inter) load automatically; the theme works offline with system fallbacks.

## Pattern catalog

| Pattern | Slug | What it is |
|---|---|---|
| Hero with property search | `haven/hero-search` | Full-width cover hero + search bar mock |
| Featured listings | `haven/featured-listings` | 6 property cards with badges and specs |
| Stats band | `haven/stats-band` | Animated counters (homes sold, volume, ratio) |
| Neighborhoods | `haven/neighborhoods` | 4 area guide cards with listing counts |
| Agents team | `haven/agents-team` | 4 agent profiles with photos and bios |
| Client testimonials | `haven/testimonials-clients` | 3 review cards with star ratings |
| Mortgage FAQ | `haven/mortgage-faq` | 5-question accordion (details blocks) |
| Book a private viewing | `haven/viewing-cta` | Navy banner with dual CTAs |
| Latest from the journal | `haven/blog-latest` | 3 article cards with photos |
| Newsletter CTA | `haven/newsletter-cta` | Subscribe band |

## Customization

- **Colors & fonts:** everything flows from `theme.json` — tweak the palette, type scale or spacing there.
- **Style variation:** switch to the **Coastal** light style from the Site Editor's Styles panel.
- **Block styles:** Gold Outline (button), Property Card (group), Soft Frame (image), Gold Rule (heading).
- **Front-end script:** `assets/js/theme.js` handles scroll reveals, animated counters and the back-to-top button — vanilla JS, no dependencies.

## Changelog

### 1.0.0
- Initial release: 8 templates, 2 template parts, 10 block patterns, Coastal style variation, theme.js interactions, full a11y pass.

## License

GNU General Public License v2 or later — see `LICENSE`.
