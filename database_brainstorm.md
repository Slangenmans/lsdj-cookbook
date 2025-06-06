# DB Tables
Instrument of different types (pulse, wave, kick and noise) will be saved in seperate tables to accomodate the different fields available.
# LSDJ Tables
Tables can be used by any instrument! Therefore, a seperate `tables` table will be made. Each instrument table will contain a foreign ID connecting the correct table to the correct instrument.
# Major instrument changes
To accomodate instrument changes (like the `env` parameter suddenly having three values instead of one), LSDJ versioning will be included in the table name: `pulse-instruments-v-9`
# Table structure
All instruments based on LSDJ 9.x
## Pulse
- `name`                - string
- `env1`                - string (hex value)
- `env2`                - string (hex value)
- `env3`                - nullable string (hex value)
- `wave`                - int (25, 50, 75)
- `output`              - str (L, R, LR)
- `length`              - str (hex value, with `unlimited` option)
- `sweep`               - string (hex value)
- `pitch_speed`         - str (fast, tick, step, drum)
- `pitch_waveform`      - str (waveforms: triangle, saw, square)
- `transpose`           - bool
- `transpose_pu2`       - str (hex value)
- `finetune`            - str (hex value)
- `cmd_rate`            - str (single hex value)
- `table_id`            - foreign ID
- `table_mode`          - nullable str (step, tick, off)

## Wave
- `name`                - string
- `volume_level`        - tinyInt (1, 2 or 3)
- `volume_panning`      - str (L, R, LR)
- `pitch_speed`         - str (fast, tick, step, drum)
- `pitch_waveform`      - str (waveforms: triangle, saw, square)
- `transpose`           - bool
- `finetune`            - str (hex value)
- `cmd_rate`            - str (single hex value)
- `play`                - str, manual, once, loop, pingpong, resync
- `synth`               - str (single hex value)
- `speed`               - str (hex value)
- `length`              - str (single hex value)
- `loop_pos`            - str (single hex value)
- `table_id`            - foreign ID
- `table_mode`          - nullable str (step, tick, off)

### Synth screen
- `signal`              - str (saw, triangle, square, **waveform**... unsure how to deal with the last one)
- `filter`              - str (lowp, highp, bandp, allp)
- `dist`                - str (clip, fold, wrap)
- `phase`               - str (pinch, wrap, resync, resyn2)
- `synth_volume_first`  - str (hex value)
- `synth_volume_last`   - str (hex value)
- `cutoff_first`        - str (hex value)
- `cutoff_last`         - str (hex value)
- `q_first`             - str (hex value)
- `q_last`              - str (hex value)
- `vshift_first`        - str (hex value)
- `vshift_last`         - str (hex value)
- `limit_first`         - str (hex value)
- `limit_last`          - str (hex value)
- `phase_first`         - str (hex value)
- `phase_last`          - str (hex value)

## Noise
- `name`                - string
- `env1`                - string (hex value)
- `env2`                - string (hex value)
- `env3`                - nullable string (hex value)
- `output`              - str (L, R, LR)
- `length`              - str (hex value, with `unlimited` option)
- `pitch_safety`        - str (safe, free)
- `vibrato`             - str (waveforms: triangle, saw, square)
- `transpose`           - bool
- `cmd_rate`            - str (single hex value)
- `table_id`            - foreign ID
- `table_mode`          - nullable str (step, tick, off)

## Table
WIP